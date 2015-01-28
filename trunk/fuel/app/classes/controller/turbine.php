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

		$turbine = new Model_Turbine();

		$fieldset = Fieldset::forge()->add_model('Model_Turbine')->repopulate();

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

		$data['turbine'] = array_merge($fieldset->input(), array('powers' => $turbine->powers, 'turbine_powers' => Input::post('turbine_powers')));

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

		for ($i = 0; $i <= 30; $i++)
		{
			if (!isset($turbine->powers[$i]))
			{
				$power = new Model_TurbinePower();
				$power->turbine_id = $turbine->turbine_id;
				$power->wind_speed = $i;
			}
			else
			{
				$power = $turbine->powers[$i];
			}

			$power->turbine_power = Input::post('turbine_power_'.$i, 0);

			$turbine->powers[$i] = $power;
		}

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

		$data['turbine'] = array_merge($turbine->to_array(), $fieldset->input(), array('powers' => $turbine->powers, 'turbine_powers' => count($turbine['powers'])));

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
