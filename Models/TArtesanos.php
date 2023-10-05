<?php
require_once("Libraries/Core/Mysql.php");
trait TArtesanos
{
	private $con;

	public function getArtesanosT()
	{

		$this->con = new Mysql();
		$sql = "SELECT idpersona, nombres, apellidos, telefono
				 FROM persona WHERE status != 0 AND rolid IN (2)";
		$request = $this->con->select($sql);

		return $request;
	}
}
