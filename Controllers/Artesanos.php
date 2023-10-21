<?php 
	require_once("Models/TCategoria.php");
	require_once("Models/TProducto.php");
	require_once("Models/TCliente.php");
	require_once("Models/TArtesanos.php");
	require_once("Models/LoginModel.php");
	class Artesanos extends Controllers{
		use TCategoria, TProducto, TCliente, TArtesanos;
		public $login;
		public function __construct()
		{
			session_start();
			parent::__construct();
			$this->login = new LoginModel();
		}

		public function artesanos()
		{
			$data['page_tag'] = NOMBRE_EMPESA;
			$data['page_title'] = NOMBRE_EMPESA;
			$data['page_name'] = "artesanos";
			
			$this->views->getView($this,"artesanos",$data);
		}
	}
 ?>
