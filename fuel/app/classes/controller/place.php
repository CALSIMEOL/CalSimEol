<?php

class Controller_Place extends Controller_Template
{
	// Action par défaut du contrôleur
	public function action_index()
	{
		// Redirige vers la liste des sites
		Response::redirect('place/list');
	}

	// Action affichage des éoliennes
	public function action_list()
	{
		// Construction de la page (cf: app/classes/model/place/list.php)
		$this->template->title = 'Liste des sites';
		$this->template->content = ViewModel::forge('place/list');
	}

	// Action ajouter une éolienne
	public function action_add()
	{
		// Informations à insérer dans la vue
		$data = array();

		// Créé une nouvelle instance pour le site
		$place = new Model_Place();

		// Créé une nouvelle instance pour chaque occurence des vents
		for ($i = 0; $i <= 30; $i++)
		{
			// Créé une nouvelle instance pour l'occurence
			$point = new Model_PlaceWeibull();
			$point->wind_speed = $i;
			$point->place_probability = Input::post('place_probability_'.$i, 0);

			// Ajoute l'occurence au tableau
			$place->weibull[] = $point;
		}

		// Charge le formulaire à partir du modèle du site
		$fieldset = Fieldset::forge()->add_model('Model_Place')->repopulate();

		// Vérifie les informations du formulaire
		if ($fieldset->validation()->run())
		{
			// Met à jour les informations avec celles saisies dans le formulaire
			$place->set($fieldset->validated());

			// Inclue le fichier contenant les fonctions de calcul
			require_once APPPATH . '/vendor/process.php';

			// Gestion des cas
			if (Input::post('distribSources') == 'simple')
				switch (Input::post('choiceOption'))
				{
					case 'opt1': // Vm & k
						$result = Vmk($place->place_mean_speed, $place->place_shape_factor);
					break;

					case 'opt2': // Vm & Sigma
						$result = Vmsigma($place->place_mean_speed, $place->place_std_deviation);
					break;

					case 'opt3': // A & k
						$result = Ak($place->place_shape_factor, $place->place_scale_factor);
					break;

					default:
				}

			// L'occurence des vents a été saisie
			if (Input::post('distribSources') == 'detailed')
				$result = occ($place);

			// Récupère le résultat des calculs
			$place->place_mean_speed = $result['Vm'];
			$place->place_std_deviation = $result['Sigma'];
			$place->place_shape_factor = $result['k'];
			$place->place_scale_factor = $result['A'];

			// Sauvegarde le nouveau site
			if ($place->save())
			{
				// Redirige vers la liste des sites
				Response::redirect_back('place/list');
			}
		}
		else
		{
			// Récupère les messages d'erreur
			$data['messages'] = $fieldset->validation()->error();
		}

		// Récupère les informations du site pour les afficher
		$data['place'] = array_merge($fieldset->input(), array('weibull' => $place->weibull));

		// Construction de la page
		$this->template->title = "Ajouter un site";
		$this->template->content = View::forge('place/siteParameters', $data);
	}

	// Action d'édition d'un site
	public function action_edit($id)
	{
		// Informations à insérer dans la vue
		$data = array();

		// Récupère le site par son identifiant
		$place = Model_Place::find($id);

		// Redirige à la liste si le site n'existe pas
		$place and !$place->place_verified ? : Response::redirect_back('place/list');

		// Récupère les points de la distribution des vents
		$weibull = array();
		foreach ($place->weibull as $point)
		{
			$weibull[$point->wind_speed] = $point;
		}

		// Complète la liste des points
		for ($i = 0; $i <= 30; $i++)
		{
			// Vérifie si une occurence existe
			if (!isset($weibull[$i]))
			{
				// Créé l'occurence manquante
				$point = new Model_PlaceWeibull();
				$point->place_id = $place->place_id;
				$point->wind_speed = $i;
				$point->place_probability = Input::post('place_probability_'.$i, 0);

				$place->weibull[] = $point;
			}
			else
			{
				// Met à jour la valeur de l'occurence si elle existe
				$place->weibull[$weibull[$i]->place_weibull_id]->place_probability = Input::post('place_probability_'.$i, $place->weibull[$weibull[$i]->place_weibull_id]->place_probability);
			}
		}

		// Charge le formulaire à partir du modèle du site
		$fieldset = Fieldset::forge()->add_model('Model_Place')->populate($place);

		// // Vérifie les informations saisies dans pourle site
		if ($fieldset->validation()->run())
		{
			// Met à jour le modèle avec les données validées
			$place->set($fieldset->validated());

			// Inclue le fichier contenant les fonctions de calcul
			require_once APPPATH . '/vendor/process.php';

			//
			if (Input::post('distribSources') == 'simple')
				switch (Input::post('choiceOption'))
				{
					case 'opt1':
						$result = Vmk($place->place_mean_speed, $place->place_shape_factor);
					break;

					case 'opt2':
						$result = Vmsigma($place->place_mean_speed, $place->place_std_deviation);
					break;

					case 'opt3':
						$result = Ak($place->place_shape_factor, $place->place_scale_factor);
					break;

					default:
				}

			if (Input::post('distribSources') == 'detailed')
				$result = occ($place);

			$place->place_mean_speed = $result['Vm'];
			$place->place_std_deviation = $result['Sigma'];
			$place->place_shape_factor = $result['k'];
			$place->place_scale_factor = $result['A'];

			// Sauvegarde des modifications
			if ($place->save())
			{
				// Redirige l'utilisateur sur la liste des sites si la mise à jour a réussie
				Response::redirect_back('place/list');
			}
		}
		else
		{
			// Récupère la liste des erreurs de validations
			$data['messages'] = $fieldset->validation()->error();
		}

		$data['place'] = array_merge($place->to_array(), $fieldset->input(), array('weibull' => $place->weibull));

		$this->template->title = 'Edition de '.$place->place_name;
		$this->template->content = View::forge('place/siteParameters', $data);
	}

	public function action_delete($id)
	{
		$place = Model_Place::find($id);

		!$place or $place->place_verified ? : $place->delete();

		Response::redirect_back('place/list');
	}

	public function action_import()
	{
		if (Input::post())
		{
			$url = 'http://eolatlas.calsimeol.fr/fics_php/stationProche.php';
			$url.= '?latitude='.Input::post('place_latitude', 0);
			$url.= '&longitude='.Input::post('place_longitude', 0);

			$response = Request::forge($url, 'curl')->execute()->response();

			if ($response->status == 200 and is_array($response->body))
			{
				$station = $response->body;

				require_once APPPATH . '/vendor/process.php';

				$place = new Model_Place();
				$place->place_name = sprintf('EA%d - %s', $station['idStation'], $station['nom']);
				$place->place_latitude = $station['latitude'];
				$place->place_longitude = $station['longitude'];
				$place->place_mean_temp = $station['temperature'];
				$place->place_shape_factor = $station['facteurForme']; // k
				$place->place_scale_factor = $station['facteurEchelle']; // A
				$place->place_altitude = $station['altitude'];

				$result = Ak($place->place_shape_factor, $place->place_scale_factor);

				$place->place_mean_speed = $result['Vm'];
				$place->place_std_deviation = $result['Sigma'];
				$place->place_shape_factor = $result['k'];
				$place->place_scale_factor = $result['A'];

				if ($place->save())
				{
					Response::redirect('place/edit/'.$place->place_id);
				}
			}
		}

		$this->template->title = "EolAtlas";
		$this->template->content = View::forge('place/import');
	}
}
