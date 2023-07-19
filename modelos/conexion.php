<?php
class Conexion{
	static public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=lblog_34635163_disbattery","root","");
		$link->exec("set names utf8");
		return $link;
	}
}
class ConexionMobile{
	static public function conectarMobile(){
		return new PDO("sqlite:bd/disbattery.db","","",array(PDO::ATTR_PERSISTENT => true));
		return $link;
	}
}