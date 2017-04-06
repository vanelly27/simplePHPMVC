<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/lugares.model.php");

  function run(){
    $arregloAMandarAVista = array();
    $arregloAMandarAVista["galeria"] = array();


    $arregloAMandarAVista["galeria"]  = obtenerLugares();

     addCssRef("public/css/galery.css");
    renderizar("home",$arregloAMandarAVista);
  }


  run();
?>
