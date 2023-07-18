<?php
class Conexion{
	static public function conectar(){
		$link = new PDO("mysql:host=192.168.130.116;port:3307;dbname=lblog_34635163_disbattery,lblog_34635163,3y99gypodkn0");
		return $link;
	}
}
class ConexionMobile{
	static public function conectarMobile(){
		return new PDO("sqlite:bd/disbattery.db","","",array(PDO::ATTR_PERSISTENT => true));
		return $link;
	}
}