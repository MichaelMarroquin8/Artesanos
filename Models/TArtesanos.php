<?php
require_once("Libraries/Core/Mysql.php");
trait TArtesanos
{
	private $con;

	public function getArtesanosT()
	{
		$this->con = new Mysql();
		$sql = "SELECT *
        FROM persona
        WHERE status != 0 AND rolid IN (4)
        ORDER BY idpersona DESC
        LIMIT 3";
		$request = $this->con->select_all($sql);

		return $request;
	}
	public function getArtesanos()
	{
		$this->con = new Mysql();
		$sql = "SELECT idpersona, nombres, apellidos, telefono
				 FROM persona WHERE status != 0 AND rolid IN (4)";
		$request = $this->con->select_all($sql);

		return $request;
	}
}
