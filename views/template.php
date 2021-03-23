<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="views/assets/css/colors.css">
    <link rel="stylesheet" href="views/assets/css/plugins.css">
    <link rel="stylesheet" href="views/assets/css/style.css">

    <title>Home</title>

</head>
<body>
<div class="container">
<?php


    // if(isset($_SESSION["validarSesionBackend"]) && $_SESSION["validarSesionBackend"]==="ok"){

          /*============================================
                CABEZOTE
          ==============================================*/

            include "components/header.php";

          /*============================================
                LATERAL
          ==============================================*/

        //   include "modulos/sideBar.php";

          /*============================================
              CONTENIDO
          ==============================================*/

          if (isset($_GET["route"])){

            if($_GET["route"]=="home" ||
               $_GET["route"]=="diseno"

            ){

               include "components/".$_GET["route"].".php";

            }

          }else{
              include "components/home.php";
          }

          /*============================================
              FOOTER
          ==============================================*/
          include "components/footer.php";

    // }else{

    //   include "modulos/login.php";

    // }

  ?>


</div>

</body>
</html>