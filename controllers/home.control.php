<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");

  function run(){
    $arregloAMandarAVista = array();
    $arregloAMandarAVista["galeria"] = array();
    $arregloAMandarAVista["galeria"][]=array(
      "titulo"=>"Imagen 1",
      "descripcion"=>"Esta es una Imagen de Prueba 1",
      "lugarid"=>10,
      "urlImagen"=>"public/imgs/t1.jpg",
      "descripcionCorta"=>"Actividad UML"
    );
    $arregloAMandarAVista["galeria"][]=array(
      "titulo"=>"Imagen 2",
      "descripcion"=>"Esta es una Imagen de Prueba 2",
      "lugarid"=>11,
      "urlImagen"=>"public/imgs/t2.jpg",
      "descripcionCorta"=>"Actividad UML"
    );
    $arregloAMandarAVista["galeria"][]=array(
      "titulo"=>"Imagen 3",
      "descripcion"=>"Esta es una Imagen de Prueba 2",
      "lugarid"=>11,
      "urlImagen"=>"public/imgs/t3.jpg",
      "descripcionCorta"=>"Actividad UML"
    );
    $arregloAMandarAVista["galeria"][]=array(
      "titulo"=>"Imagen 4",
      "descripcion"=>"Esta es una Imagen de Prueba 2",
      "lugarid"=>11,
      "urlImagen"=>"public/imgs/t4.jpg",
      "descripcionCorta"=>"Actividad UML"
    );
    // $arregloAMandarAVista["galeria"]  = obtenerGaleria();

     addCssRef("public/css/galery.css");
    renderizar("home",$arregloAMandarAVista);
  }


  run();
?>
