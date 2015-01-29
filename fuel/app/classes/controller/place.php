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

	public function action_add($db = 1)
	{
		$data = array();

		$fieldset = Fieldset::forge()->add_model('Model_Place')->repopulate();

		if ($fieldset->validation()->run())
		{
			if (Model_Place::forge($fieldset->validated())->save())
			{
				Response::redirect_back('place/list');
			}
		}
		else
		{
			$data['messages'] = $fieldset->validation()->error();
		}

		$data['place'] = $fieldset->input();

		$this->template->title = "Ajouter un site";
		$this->template->content = View::forge('place/siteParameters', $data);
	}

	public function action_edit($id, $db = 1)
	{
		$data = array();

		$place = Model_Place::find($id);

		$place ? : Response::redirect_back('place/list');

		$fieldset = Fieldset::forge()->add_model('Model_Place')->populate($place);

		if ($fieldset->validation()->run())
		{
			$place->set($fieldset->validated());

			if (! $db)
			{
				Cookie::set('simulation_place', base64_encode(serialize($place->to_array())));
				Response::redirect_back('simulate/choose');
			}

			if ($db and $place->save())
			{
				Response::redirect_back('place/list');
			}
		}
		else
		{
			$data['messages'] = $fieldset->validation()->error();
		}

		$data['place'] = array_merge($place->to_array(), $fieldset->input());

		$this->template->title = 'Edition de '.$place->place_name;
		$this->template->content = View::forge('place/siteParameters', $data);
	}

	public function action_delete($id)
	{
		$place = Model_Place::find($id);

		! $place ? : $place->delete();

		Response::redirect_back('place/list');
	}

	public function action_import()
	{
		if (Input::post())
		{
			$url = 'http://eolatlas.890m.com/mickael/stationProche.php';
			$url.= '?latitude='.Input::post('place_latitude', 0);
			$url.= '&longitude='.Input::post('place_longitude', 0);

			$response = Request::forge($url, 'curl')->execute()->response();

			if ($response->status == 200 and is_array($response->body))
			{
				// {"id":"247","nom":"Marseille","latitude":"43.29695","longitude":"5.38107","facteurForme":"0","facteurEchelle":"0","hauteur":"0"}
				$station = $response->body;

				$place = new Model_Place();
				$place->place_name = sprintf('EA%d - %s', $station['id'], $station['nom']);
				$place->place_latitude = $station['latitude'];
				$place->place_longitude = $station['longitude'];
				$place->place_shape_factor = $station['facteurForme'];
				$place->place_scale_factor = $station['facteurEchelle'];
				$place->place_altitude = $station['hauteur'];

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
