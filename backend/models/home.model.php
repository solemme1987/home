<?php
require_once "conexion.php";

class HomeModel{
   public static function insertHomeModel($data,$table){

    $stmt=Conexion::conectar()->prepare("INSERT INTO $table(name,description,numberRooms,numberBathrooms,parking,internetService,price)VALUES(:name,:description,:numberRooms,:numberBathrooms,:parking,:internetService,:price)");

    $stmt->bindParam(":name", $data["name"], PDO::PARAM_STR);
    $stmt->bindParam(":description", $data["description"], PDO::PARAM_STR);
    $stmt->bindParam(":numberRooms", $data["numberRooms"], PDO::PARAM_INT);
    $stmt->bindParam(":numberBathrooms", $data["numberBathrooms"], PDO::PARAM_INT);
    $stmt->bindParam(":parking", $data["parking"], PDO::PARAM_STR);
    $stmt->bindParam(":internetService", $data["internetService"], PDO::PARAM_STR);
    $stmt->bindParam(":price", $data["price"], PDO::PARAM_INT);

    if($stmt->execute()){
        return "ok";

    }else{
        return "error";
    }


   }
}