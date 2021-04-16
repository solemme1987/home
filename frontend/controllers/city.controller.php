<?php

class CityController{

    public static function selectCityController(){
        $tabla="city";
        $sql=CityModel::listarCityModel($tabla);
       // echo "<pre>"
           // print_r($sql);
       // echo "</pre>";

      
       foreach($sql as $datos => $value){
          
        echo"<option value ='{$value['id']}'>{$value['city']} </option>";
       }
       
    }
}
?>
