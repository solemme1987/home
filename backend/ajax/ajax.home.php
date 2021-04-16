<?php

require_once "../controllers/home.controller.php";
require_once "../models/home.model.php";


class AjaxInsertHome{
    public $homeName;
    public $descriptionHome;
    public $numberRooms;
    public $battRooms;
    public $parking;
    public $internet;
    public $price;
    
   public function insertHome(){
    $data = array(
         "name"=>$this->homeName,
         "description"=>$this->descriptionHome,
         "numberRooms"=>$this->numberRooms,
         "numberBathrooms"=>$this->battRooms,
         "parking"=>$this->parking,
         "internetService"=>$this->internet,
         "price"=>$this->price
    );
    $request=HomeController::insertHomeController($data);
       echo $request;
   }
}

if(isset($_POST["homeName"])){
    $home = new AjaxInsertHome();
    $home->homeName = $_POST["homeName"];
    $home->descriptionHome = $_POST["descriptionHome"];
    $home->numberRooms = $_POST["numberRooms"];
    $home->battRooms = $_POST["battRooms"];
    $home->parking = $_POST["parking"];
    $home->internet = $_POST["internet"];
    $home->price = $_POST["price"];

    $home->insertHome();
}