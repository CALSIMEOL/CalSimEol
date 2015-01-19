<?php

class Controller_Home extends Controller_Template
{
	public function action_index()
	{
		$this->template->title = 'Accueil';
		$this->template->content = View::forge('home/index');
	}

	public function action_about()
	{
		$this->template->title = 'À propos';
		$this->template->content = View::forge('home/about');
	}
}
