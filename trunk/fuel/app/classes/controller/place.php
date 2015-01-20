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

	public function action_edit($id)
	{
		$data = array();

		$place = Model_Place::find($id);

		$place ? : Response::redirect_back('place/list');

		$fieldset = Fieldset::forge()->add_model('Model_Place')->populate($place);

		if ($fieldset->validation()->run())
		{
			$place->set($fieldset->validated());

			if ($place->save())
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

	public function action_choose()
	{
		if (Input::method() == 'POST')
		{
			switch (Input::post('place_choice'))
			{
				case 'import':
					Response::redirect('place/import');
				break;

				case 'manual':
					Response::redirect('place/add');
				break;

				default:
			}
		}

		$data['places'] = Model_Place::find('all');

		$this->template->title = 'Choix site';
		$this->template->content = View::forge('place/choose', $data);
	}

	public function action_siteParameters()
	{
		Response::redirect('place/add');

		if (Input::method() == 'POST')
		{
			Response::redirect('place/list');
		}
		else
		{
			$this->template->title = 'Ajout site';
			$this->template->content = View::forge('place/siteParameters');
		}
	}
}
