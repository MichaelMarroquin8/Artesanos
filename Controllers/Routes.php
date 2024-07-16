<?php

class Routes extends Controllers
{
	public function __construct()
	{
		session_start();
		parent::__construct();
		if (empty($_SESSION['login'])) {
			header('Location: ' . base_url() . '/login');
			die();
		}
	}

	public function Routes()
	{

		$data['page_tag'] = "Guias artesanos";
		$data['page_title'] = "Guias";
		$data['page_name'] = "Guias Artesanos";
		$this->views->getView($this, "routes", $data);
	}
}
