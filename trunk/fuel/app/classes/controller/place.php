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
		return 'Importer site (EolAtlas).';
	}
}
