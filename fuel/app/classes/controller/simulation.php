<?php

class Controller_Simulation extends Controller_Template
{
	// Action par défaut du contrôleur
	public function action_index()
	{
		// Redirige vers la page pour configurer la simulation
		Response::redirect('simulation/choose');
	}

	// Action pour lancer une nouvelle simulation
	public function action_choose()
	{
		// Récupère les choix précédents stockés dans les cookies
		$place_id = Cookie::get('sim_place');
		$turbine_id = Cookie::get('sim_turbine');

		// Traitement du formulaire si une requête POST a été envoyée
		if (Input::method() == 'POST')
		{
			// Récupère les nouvelles valeurs choisies
			$place_id = Input::post('place_choice');
			$turbine_id = Input::post('turbine_choice');

			// Met à jour les cookies avec ces nouvelles valeurs
			Cookie::set('sim_place', $place_id);
			Cookie::set('sim_turbine', $turbine_id);

			// Charge l'instance du site et de l'éolienne choisie
			$place = Model_Place::find($place_id);
			$turbine = Model_Turbine::find($turbine_id);

			// Redirige vers la page de simulation si les deux instances ont été trouvées
			$place and $turbine ? Response::redirect('simulation/run/'.$place_id.'/'.$turbine_id) : null;
		}

		// Informations à afficher sur la vue
		$data['sim_place'] = $place_id;
		$data['places'] = Model_Place::find('all');
		$data['sim_turbine'] = $turbine_id;
		$data['turbines'] = Model_Turbine::find('all');

		// Construction de la vue
		$this->template->title = 'Choix site';
		$this->template->content = View::forge('simulation/choose', $data);
	}

	// Action d'exécuter une simulation
	public function action_run($place_id, $turbine_id)
	{
		// Charge l'instance du site et de l'éolienne
		$place = Model_Place::find($place_id);
		$turbine = Model_Turbine::find($turbine_id);

		// Redirige vers la page de paramétrage de la simulation si une des instances n'existe pas
		$place and $turbine ? : Response::redirect_back('simulation/choose');

		// Inclue le fichier regroupant les calculs
		require_once APPPATH . '/vendor/process.php';

		// Exécution de la simulation
		$data = _calcul($place, $turbine);

		// Construction de la page
		$this->template->title = '';
		$this->template->content = View::forge('simulation/result', $data);
	}
}
