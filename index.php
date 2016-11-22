<?php

    session_start();
     date_default_timezone_set("America/Tegucigalpa");

    require_once("libs/utilities.php");

    $pageRequest = "home";

    if(isset($_GET["page"])){
        $pageRequest = $_GET["page"];
    }

    //Incorporando los midlewares son codigos que se deben ejecutar
    //Siempre
    require_once("controllers/verificar.mw.php");
    require_once("controllers/site.mw.php");


    //Este switch se encarga de todo el enrutamiento
    switch($pageRequest){
        case "home":
            //llamar al controlador
            require_once("controllers/home.control.php");
            break;
        case "login":
              require_once("controllers/login.control.php");
              break;
        case "acerca":
            require_once("controllers/acerca.control.php");
            break;
        case "productos":
            require_once("controllers/productos.control.php");
            break;
        case "productosform":
            require_once("controllers/productosform.control.php");
            break;
        case "logout":
            mw_setEstaLogueado("",false);
            redirectWithMessage("Ha cerrado sesión satisfactoriamente!");
            break;
        default:
            require_once("controllers/error.control.php");
    }
?>
