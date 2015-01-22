<?php

class Controller_Turbine extends Controller_Template
{
	public function action_index()
	{
		Response::redirect('turbine/list');
	}

	public function action_list()
	{
		$this->template->title = 'Liste des éoliennes';
		$this->template->content = ViewModel::forge('turbine/list');
	}

	public function action_add()
	{
		$data = array(
//			'update' => false, // Not used
		);

		$fieldset = Fieldset::forge()->add_model('Model_Turbine')->repopulate();

		if ($fieldset->validation()->run())
		{
			if (Model_Turbine::forge($fieldset->validated())->save())
			{
				Response::redirect_back('turbine/list');
			}
		}
		else
		{
			$data['messages'] = $fieldset->validation()->error();
		}

		$data['turbine'] = $fieldset->input();

		$this->template->title = 'Ajouter une éolienne';
		$this->template->content = View::forge('turbine/form', $data);
	}

	public function action_edit($id)
	{
		$data = array(
//			'update' => true, // Not used
		);

		$turbine = Model_Turbine::find($id);

		$turbine ? : Response::redirect_back('turbine/list');

		$fieldset = Fieldset::forge()->add_model('Model_Turbine')->populate($turbine);

		if ($fieldset->validation()->run())
		{
			$turbine->set($fieldset->validated());

			if ($turbine->save())
			{
				Response::redirect_back('turbine/list');
			}
		}
		else
		{
			$data['messages'] = $fieldset->validation()->error();
		}

		$data['turbine'] = array_merge($turbine->to_array(), $fieldset->input());
//		$data['turbine']['powers'] = $turbine->powers;

		$this->template->title = 'Editer';
		$this->template->content = View::forge('turbine/form', $data);
	}

	public function action_delete($id)
	{
		$turbine = $id > 0 ? Model_Turbine::find($id) : false;

		$turbine ? $turbine->delete() : null;

		Response::redirect_back('turbine/list');
	}
}
