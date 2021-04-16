<?php
require_once "conexion.php";
class CityModel{


  public static function listarCityModel($tabla){
    $stmt=Conexion::conectar()->prepare("SELECT * FROM $tabla");
    $stmt->execute();
    return $stmt->fetchAll();

  }

}
