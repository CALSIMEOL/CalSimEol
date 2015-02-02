<?php

class Controller_Place extends Controller_Template
{
	public function action_index()
	{
		Response::redirect('place/list');
	}

	public function action_list()
	{
		$this->template->title = 'Liste des sites';
		$this->template->content = ViewModel::forge('place/list');
	}

	public function action_add()
	{
		$data = array(
//			'update' => false, // Not used
		);

		//
		$place = new Model_Place();

		//
		for ($i = 0; $i <= 30; $i++)
		{
			//
			$point = new Model_PlaceWeibull();
			$point->wind_speed = $i;
			$point->place_probability = Input::post('place_propability_'.$i, 0);

			//
			$place->weibull[] = $point;
		}

		//
		$fieldset = Fieldset::forge()->add_model('Model_Place')->repopulate();

		//
		if ($fieldset->validation()->run())
		{
			//
			$place->set($fieldset->validated());

			//
			if (Input::post('distribSources') == 'simple')
			switch (Input::post('choiceOption'))
			{
				case 'opt1':
					$place->place_scale_factor = 0;
				break;

				case 'opt2':
					$place->place_shape_factor = pow(0.9874 / ($place->place_std_deviation / $place->place_mean_speed), 1.0983);
					$place->place_scale_factor = 0;
				break;

				case 'opt3':
					$place->place_mean_speed = 0;
				break;

				default:
			}

			//
			if (Input::post('distribSources') == 'detailed')
			{
				//
			}

			//
			if ($place->save())
			{
				//
				Response::redirect_back('place/list');
			}
		}
		else
		{
			$data['messages'] = $fieldset->validation()->error();
		}

		$data['place'] = array_merge($fieldset->input(), array('weibull' => $place->weibull));

		$this->template->title = "Ajouter un site";
		$this->template->content = View::forge('place/siteParameters', $data);
	}

	public function action_edit($id)
	{
		$data = array(
//			'update' => true, // Not used
		);

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
			if (!isset($weibull[$i]))
			{
				$point = new Model_PlaceWeibull();
				$point->place_id = $place->place_id;
				$point->wind_speed = $i;
				$point->place_probability = Input::post('place_probability_'.$i, 0);

				$place->weibull[] = $point;
			}
			else
			{
				$place->weibull[$weibull[$i]->place_weibull_id]->place_probability = Input::post('place_probability_'.$i, $place->weibull[$weibull[$i]->place_weibull_id]->place_probability);
			}
		}

		//
		$fieldset = Fieldset::forge()->add_model('Model_Place')->populate($place);

		//
		if ($fieldset->validation()->run())
		{
			//
			$place->set($fieldset->validated());

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
//			$url = 'http://eolatlas.890m.com/mickael/stationProche.php';
			$url = 'http://eol.calsimeol.fr/fics_php/stationProche.php';
			$url.= '?latitude='.Input::post('place_latitude', 0);
			$url.= '&longitude='.Input::post('place_longitude', 0);

			$response = Request::forge($url, 'curl')->execute()->response();

			if ($response->status == 200 and is_array($response->body))
			{
				// {"id":"247","nom":"Marseille","latitude":"43.29695","longitude":"5.38107","facteurForme":"0","facteurEchelle":"0","hauteur":"0"}
				$station = $response->body;

				$place = new Model_Place();
				$place->place_name = sprintf('EA%d - %s', $station['idStation'], $station['nom']);
				$place->place_latitude = $station['latitude'];
				$place->place_longitude = $station['longitude'];
				$place->place_shape_factor = $station['facteurForme']; // k
				$place->place_scale_factor = $station['facteurEchelle']; // A
				$place->place_altitude = $station['altitude'];

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
