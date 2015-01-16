<?php

class Controller_Place extends Controller_Template
{
	public function action_index()
	{
		return Response::forge('Selectionner, importer ou ajouter un site.');
	}

	public function action_list()
	{
		return 'Lister sites.';
	}

	public function action_new()
	{
		return 'Ajouter site.';
	}

	public function action_edit()
	{
		return 'Editer site.';
	}

	public function action_remove()
	{
		return 'Supprimer site.';
	}

	public function action_import()
	{
		return 'Importer site (EolAtlas).';
	}

	public function action_siteChoice()
	{
		if (Input::method() == 'POST')
		{
			switch (Input::post('choice_site'))
			{
				case 'EolAtlas':
					Response::redirect('place/eolatlas');
				break;

				case 'site_manu':

				default:
					Response::redirect('place/siteParameters');
				break;
			}
		}
		else
		{
			$this->template->title = 'CALSIMEOL - Choix site';
			$this->template->content = View::forge('place/siteChoice');
		}
	}

	public function action_siteParameters()
	{
		if (Input::method() == 'POST')
		{
			Response::redirect('*/list');
		}
		else
		{
			$this->template->title = 'CALSIMEOL - Ajout site';
			$this->template->content = View::forge('place/siteParameters');
		}
	}
}
