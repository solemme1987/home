<?php

 class HomeController{
     public static function  insertHomeController($data){

        if(isset($_POST["homeName"])){

            $table="house";
            // $data=array(
            //     "name"=>$_POST["homeName"],
            //     "description"=>$_POST["descriptionHome"],
            //     "numberRooms"=>$_POST["numberRooms"],
            //     "numberBathrooms"=>$_POST["bathrooms"],
            //     "parking"=>$_POST["parking"],
            //     "internetService"=>$_POST["internet"],
            //     "price"=>$_POST["price"],
            // );
            $request=HomeModel::insertHomeModel($data,$table);
            return $request;
            // if($request=="ok"){


            //     // echo "
            //     // <script>
            //     //         Swal.fire({
            //     //             icon: 'success',
            //     //             confirmButtonText: `Ok`,
            //     //             text: 'Casa Registrada correctamente'
            //     //         }).then((result) => {
            //     //             if (result.isConfirmed) {
            //     //                 window.location = 'casas';
            //     //             }
            //     //           })
            //     // </script>";


            // }else{
            //     echo "
            //     <script>

            //             Swal.fire({
            //                 icon: 'error',
            //                 confirmButtonText: `Cerrar`,
            //                 text: 'Error al registrar la casa'
            //             })

            //     </script>";
            // }
        }
     }
 }