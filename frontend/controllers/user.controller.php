<?php

class UserController{

    public static function insertUserController(){

        if(isset($_POST["email"])) {

            $tabla = 'person';
            $item = $_POST["email"];

            $consult= UserModel::isRepeateMail($tabla, $item);

            if ($consult) {

            /* $encriptar = crypt($_POST["password"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$'); */


                                $tabla="person";
                                $datos=array(
                                    "name"=>$_POST["name"],
                                    "lastname"=>$_POST["lastname"],
                                    "email"=>$_POST["email"],
                                    "password"=>$_POST["password"],
                                    "termsOfUse"=>$_POST["termsOfUse"],
                                    "city_id"=>$_POST["city_id"],
                                );

                         
                   $request = UserModel::inserUserModel($tabla,$datos);

                     var_dump($request);
                
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
                </script>

                ";
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
}

         

    
        
            


