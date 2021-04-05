<?php

class GoalDetailsController{

  // MOSTRAR DETALLE DE LOS GOLES
  public static function showGoalDetailsController(){

     $table="goal_details";
     $request=GoalDetailsModels::showGoalDetailsModel($table);
     return $request;
  }

  // INSERTAR UN DETALLE DE GOL
  public static function insertGoalDetailController($data){
      $table="goal_details";
      $request=GoalDetailsModels::insertGoalDetailModel($data, $table);
      echo $request;
  }

  public static function deletGoalDetailController($idGoal){
    $table='goal_details';
    $request=GoalDetailsModels::deleteGoalDetailModel($idGoal,$table);
    echo $request;
  }
}