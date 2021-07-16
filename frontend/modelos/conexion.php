<?php

class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=35.239.25.237;dbname=ecommerce",
						"ramiro",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}


}



