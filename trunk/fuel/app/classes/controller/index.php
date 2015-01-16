<?php

class Controller_Index extends Controller_Template
{
	public function action_index()
	{
		$this->template->title = 'CALSIMEOL';
		$this->template->content = View::forge('index/index');
	}

	public function action_about()
	{
		$this->template->title = 'CALSIMEOL - A propos';
		$this->template->content = View::forge('index/about');
	}
}
