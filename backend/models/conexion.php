<?php

class Conexion{

	public static function conectar(){

		$link = new PDO("mysql:host=localhost;
		                 dbname=home",
						"root",
						"",
						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
						);

		return $link;

	}

}

// class Conexion{

// 	public static function conectar(){

// 		$link = new PDO("mysql:host=fdb30.awardspace.net;
// 		                 dbname=3810880_house",
// 						"3810880_houset",
// 						"educamas123",
// 						array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
// 		                      PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
// 						);

// 		return $link;

// 	}

// }