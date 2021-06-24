<?php

require_once 'conexion.php';

class UserModel{

<<<<<<< HEAD
   public static function insertUserModel($tabla,$datos){
=======
   public static function inserUserModel($datos,$tabla){
>>>>>>> jdmartin
    
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (name,lastname,email,password,termsOfUse,city_id)
         VALUES(:name,:lastname,:email,:password,:termsOfUse,:city_id)");

        $stmt->bindParam(":name", $datos["name"],PDO::PARAM_STR);
        $stmt->bindParam(":lastname", $datos["lastname"],PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"],PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"],PDO::PARAM_STR);
        $stmt->bindParam(":termsOfUse", $datos["termsOfUse"],PDO::PARAM_STR);
        $stmt->bindParam(":city_id", $datos["city_id"],PDO::PARAM_INT); 

       

        if($stmt->execute()) {

            return "ok";
        }else {
            return "error";
        }

        
    
   }
   /* public static function idcityUserModel($ciudad){
    $stmt=Conexion::conectar()->prepare("SELECT * FROM $ciudad");
    $stmt->execute();
    return $stmt->fetchAll();


  } */}