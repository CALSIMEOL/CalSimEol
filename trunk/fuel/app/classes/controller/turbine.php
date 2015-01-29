<?php

class Controller_Turbine extends Controller_Template
{
	public function action_index()
	{
		// Redirection vers la liste d'éoliennes
		Response::redirect('turbine/list');
	}

	public function action_list()
	{
		// Affichage de la liste des éoliennes
		$this->template->title = 'Liste des éoliennes';
		$this->template->content = ViewModel::forge('turbine/list');
	}

	public function action_add()
	{
		$data = array(
//			'update' => false, // Not used
		);

		// Instanciation d'une nouvelle éolienne
		$turbine = new Model_Turbine();

		// Chargement du formulaire pour la saisie des informatioins de l'éolienne
		$fieldset = Fieldset::forge()->add_model('Model_Turbine')->repopulate();

		// Validation du formulaire
		if ($fieldset->validation()->run())
		{
			// Met à jour les informations du modèle avec les informations saisies par l'utilisateur
			$turbine->set($fieldset->validated());

			// Récup_re et enregistre les points pour la courbe de puissance
			for ($i = 0; $i <= 30; $i++)
			{
				// Instanciation d'un modèle pour chaque points de la courbe de puissance
				$power = new Model_TurbinePower();
				$power->wind_speed = $i;
				$power->turbine_power = Input::post('turbine_power_'.$i, 0);

				// Association de l'instance créée à la nouvelle éolienne
				$turbine->powers[] = $power;
			}

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
		$data['turbine'] = array_merge($fieldset->input(), array('powers' => $turbine->powers, 'turbine_powers' => Input::post('turbine_powers')));

		// Construit la page
		$this->template->title = 'Ajouter une éolienne';
		$this->template->content = View::forge('turbine/form', $data);
	}

	public function action_edit($id)
	{
		$data = array(
//			'update' => true, // Not used
		);

		// Récupère l'éolienne par son identifiant
		$turbine = Model_Turbine::find($id);

		// Redirige à la lisye sir l'éolienne n'exite pas
		$turbine ? : Response::redirect_back('turbine/list');

		// Récupère les points de la coube de puissance
		$powers = array();
		foreach ($turbine->powers as $power)
		{
			$powers[$power->wind_speed] = $power;
		}

		// Complète la liste des points
		for ($i = 0; $i <= 30; $i++)
		{
			if (!isset($powers[$i]))
			{
				$power = new Model_TurbinePower();
				$power->turbine_id = $turbine->turbine_id;
				$power->wind_speed = $i;
				$power->turbine_power = Input::post('turbine_power_'.$i, 0);

				$turbine->powers[] = $power;
			}
			else
			{
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
				// Redirige l'utilisateur sur la liste des éoliennes si la mise à jour réussi
				Response::redirect_back('turbine/list');
			}
		}
		else
		{
			// Récupère la liste des erreurs de validation
			$data['messages'] = $fieldset->validation()->error();
		}

		$data['turbine'] = array_merge($turbine->to_array(), $fieldset->input(), array('powers' => $turbine->powers, 'turbine_powers' => count($turbine['powers'])));

		$this->template->title = 'Editer';
		$this->template->content = View::forge('turbine/form', $data);
	}

	public function action_delete($id)
	{
		$turbine = $id > 0 ? Model_Turbine::find($id) : false;

		$turbine and !$turbine->turbine_verified ? $turbine->delete() : null;

		Response::redirect_back('turbine/list');
	}
}
