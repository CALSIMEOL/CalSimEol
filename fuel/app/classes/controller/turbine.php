<?php

class Controller_Turbine extends Controller_Template
{
	// Vitesse maximale du vent en km/h
	const MAX_WIND_SPEED = 30;

	// Action par défaut du contrôleur
	public function action_index()
	{
		// Redirection vers la liste d'éoliennes
		Response::redirect('turbine/list');
	}

	// Action d'affichage de la liste des éoliennes (cf: app/classes/model/turbine/list.php)
	public function action_list()
	{
		// Affichage de la liste des éoliennes
		$this->template->title = 'Liste des éoliennes';
		$this->template->content = ViewModel::forge('turbine/list');
	}

	// Actoin d'ajouter une éolienne
	public function action_add()
	{
		// Informations à insérer dans la vue
		$data = array();

		// Instanciation d'une nouvelle éolienne
		$turbine = new Model_Turbine();

		// Récupère et enregistre les points pour la courbe de puissance
		for ($i = 0; $i <= self::MAX_WIND_SPEED; $i++)
		{
			// Instanciation d'un modèle pour chaque points de la courbe de puissance
			$power = new Model_TurbinePower();
			$power->wind_speed = $i;

			// Véification de l'interval pour la courbe de puissance
			if ($i >= Input::post('turbine_start_speed', 0) and $i <= Input::post('turbine_stop_speed', self::MAX_WIND_SPEED))
			{
				// Dans l'interval, choisie la valeur saisie par l'utilisateur
				$power->turbine_power = Input::post('turbine_power_'.$i, 0);
			}
			else
			{
				// Hors de l'interval, force la valeur 0
				$power->turbine_power = 0;
			}

			// Association de l'instance créée à la nouvelle éolienne
			$turbine->powers[] = $power;
		}

		// Chargement du formulaire pour la saisie des informatioins de l'éolienne
		$fieldset = Fieldset::forge()->add_model('Model_Turbine')->repopulate();

		// Validation du formulaire
		if ($fieldset->validation()->run())
		{
			// Met à jour les informations du modèle avec les informations saisies par l'utilisateur
			$turbine->set($fieldset->validated());

			// Sauvegarde de l'éolienne
			if ($turbine->save())
			{
				// Redirige vers la liste des éoliennes si l'insertion s'est bien déroulé
				Response::redirect_back('turbine/list');
			}
		}
		else
		{
			// Récupère les erreurs pour les afficher sur la page
			$data['messages'] = $fieldset->validation()->error();
		}

		// Récupère les informations de l'éolienne pour pouvoir les afficher sur la page
		$data['turbine'] = array_merge($fieldset->input(), array('powers' => $turbine->powers));

		// Construit la page
		$this->template->title = 'Ajouter une éolienne';
		$this->template->content = View::forge('turbine/form', $data);
	}

	// Action d'éditer une éolienne
	public function action_edit($id)
	{
		// Informations à insérer dans la vue
		$data = array();

		// Récupère l'éolienne par son identifiant
		$turbine = Model_Turbine::find($id);

		// Redirige à la liste si l'éolienne n'exite pas ou si elle est vérifiée
		$turbine and !$turbine->turbine_verified ? : Response::redirect_back('turbine/list');

		// Récupère les points de la coube de puissance
		$powers = array();
		foreach ($turbine->powers as $power)
		{
			$powers[$power->wind_speed] = $power;
		}

		// Complète la liste des points
		for ($i = 0; $i <= self::MAX_WIND_SPEED; $i++)
		{
			// Créé un nouveau point pour la courbe de charge quand celui-ci n'existe pas
			if (!isset($powers[$i]))
			{
				// Instancie un nouveau point
				$power = new Model_TurbinePower();
				$power->turbine_id = $turbine->turbine_id;
				$power->wind_speed = $i;

				// Vérifie que la valeur sasie par l'utilisateur est bien comprise dans l'interval
				if ($i >= Input::post('turbine_start_speed', 0) and $i <= Input::post('turbine_stop_speed', self::MAX_WIND_SPEED))
				{
					// Utilise la valeur saisie par l'utilisateur quand on est dans l'interval
					$power->turbine_power = Input::post('turbine_power_'.$i, 0);
				}
				else
				{
					// Hors de l'interval, force la valeur à 0
					$power->turbine_power = 0;
				}

				// Ajoute le nouveau point de la courbe de puissance au modèle de l'éolienne
				$turbine->powers[] = $power;
			}
			else
			{
				// Met à jour la valeur du point de la courbe de puissance si celui-ci existe déjà
				$turbine->powers[$powers[$i]->turbine_power_id]->turbine_power = Input::post('turbine_power_'.$i, $turbine->powers[$powers[$i]->turbine_power_id]->turbine_power);
			}
		}

		// Charge le formulaire en fonction du modèle
		$fieldset = Fieldset::forge()->add_model('Model_Turbine')->populate($turbine);

		// Valide les informations saisies par l'utilisateur
		if ($fieldset->validation()->run())
		{
			// Met à jour les informations du modèle avec celles validées
			$turbine->set($fieldset->validated());

			// Sauvegarde des modifications
			if ($turbine->save())
			{
				// Redirige l'utilisateur sur la liste des éoliennes si la mise à jour réussie
				Response::redirect_back('turbine/list');
			}
		}
		else
		{
			// Récupère la liste des erreurs de validation
			$data['messages'] = $fieldset->validation()->error();
		}

		// Récupèreles informations de l'éolienne pour pouvoir les afficher sur la page
		$data['turbine'] = array_merge($turbine->to_array(), $fieldset->input(), array('powers' => $turbine->powers));

		// Construit la page
		$this->template->title = 'Editer';
		$this->template->content = View::forge('turbine/form', $data);
	}

	// Action de supprimer une éolienne
	public function action_delete($id)
	{
		// Récupère l'instance de l'éolienne que l'on veut supprimer
		$turbine = $id > 0 ? Model_Turbine::find($id) : false;

		// Supprime l'éolienne si elle existe et qu'elle n'est pas protégée
		$turbine and !$turbine->turbine_verified ? $turbine->delete() : null;

		// Redirige vers la liste des éoliennes
		Response::redirect_back('turbine/list');
	}
}
