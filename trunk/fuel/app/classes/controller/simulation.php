<?php

class Controller_Simulation extends Controller_Template
{
	public function action_index()
	{
		$this->template->title = 'Accueil';
		$this->template->content = View::forge('home/index');
	}

	public function action_choose()
	{
		$place_id = Cookie::get('sim_place');
		$turbine_id = Cookie::get('sim_turbine');

		if (Input::method() == 'POST')
		{
			$place_id = Input::post('place_choice');
			$turbine_id = Input::post('turbine_choice');

			Cookie::set('sim_place', $place_id);
			Cookie::set('sim_turbine', $turbine_id);

			switch ($place_id)
			{
				case 'import':
					Response::redirect('place/import');
				break;

				case 'manual':
					Response::redirect('place/add/0');
				break;

				default:
			}

			switch ($turbine_id)
			{
				case 'manual':
					Response::redirect('turbine/add/0');
				break;

				default:
			}

			$place = Model_Place::find($place_id);
			$turbine = Model_Turbine::find($turbine_id);

			$place and $turbine ? Response::redirect('simulation/run/'.$place_id.'/'.$turbine_id) : null;
		}

//		$function = function ($cookie_name)
//		{
//			return ($cookie = Cookie::get($cookie_name, null)) ? unserialize(base64_decode($cookie)) : array();
//		};

//		$data['place'] = isset($place_id) ? Model_Place::find($place_id) : Model_Place::forge($function('simulation_place'));
//		$data['place'] = $place_id > 0 ? Model_Place::find($place_id) : null;
		$data['sim_place'] = $place_id;
		$data['places'] = Model_Place::find('all');

//		$data['turbine'] = isset($turbine_id) ? Model_Turbine::find($turbine_id) : Model_Turbine::forge($function('simulation_turbine'));;
//		$data['turbine'] = $turbine_id > 0 ? Model_Turbine::find($turbine_id) : null;
		$data['sim_turbine'] = $turbine_id;
		$data['turbines'] = Model_Turbine::find('all');

		$this->template->title = 'Choix site';
		$this->template->content = View::forge('simulation/choose', $data);
	}

	public function action_run($place_id, $turbine_id)
	{
		$place = Model_Place::find($place_id);
		$turbine = Model_Turbine::find($turbine_id);

		$place and $turbine ? : Response::redirect_back('simulation/choose');

//		var_export($place->to_array());
//		$array = $turbine->to_array();
//		$array['powers'] = array_map(function ($o) { return $o->to_array(); }, $turbine->powers);
//		var_export($array);

		require_once APPPATH . '/vendor/process.php';

		print_r(_calcul($place, $turbine));

		$this->template->title = '';
		$this->template->content = '';
	}
}
