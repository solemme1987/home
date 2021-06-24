<?php

class UserController{

    public static function insertUserController(){

        if(isset($_POST["password"])) {
            $tabla = "person";
            /* $ciudad = $_POST["city_id"]; */
               $datos=array(
                   "name"=>$_POST["name"],
                   "lastname"=>$_POST["lastname"],
                   "email"=>$_POST["email"],
                   "password"=>$_POST["password"],
                   "termsOfUse"=>$_POST["termsOfUse"],
                   "city_id"=>$_POST["city_id"] 
               );

                    
                   $request = UserModel::insertUserModel($tabla,$datos);

                     var_dump($request);
        
                   $request = UserModel::inserUserModel($datos,$tabla);

                
                if ($request=="ok"){
                    echo "
                    <script>
                    Swal.fire({
                        icon: 'success',
                        confirmButtonText: `Ok`,
                        text: 'Registro Exitoso!',
                        }).then((result) => {
                        if (result.isConfirmed) {
                        window.location = 'home';
                        }
                        })             
                </script>";
                }   else {
                    echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'error!',
                    footer: '<a href>Why do I have this issue?</a>'
                  })
                </script>

                ";}
                } else {
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'error',
                    text: 'error!',
                    footer: '<a href>Why do I have this issue?</a>'
                  })
                </script>
                  ";
                }
                 
        
        }
        
     

    }


         

    
        
            


