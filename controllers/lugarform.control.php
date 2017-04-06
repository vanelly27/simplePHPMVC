<?php
/* Clase Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/lugares.model.php");
  function run(){
    $arregloVista = array();
    $arregloVista['mode'] = $_GET['mode'];
    $arregloVista['lugarId']=0;
    $arregloVista['lugartitulo']='';
    $arregloVista['lugardesc']='';
    $arregloVista['lugarimgurl']='';
    $arregloVista['lugardesccrt']='';

    if(isset($_GET['id'])){
      $arregloVista['lugarId']=intval($_GET['id']);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["btnGuardar"])){
          $postLugar["lugarId"] = $_POST["lugarId"];
          $postLugar["lugartitulo"] = $_POST["lugartitulo"];
          $postLugar["lugardesc"] = $_POST["lugardesc"];
          $postLugar["lugarimgurl"] = $_POST["lugarimgurl"];
          $postLugar["lugardesccrt"] = $_POST["lugardesccrt"];

          if(  $arregloVista['mode'] == 'INS' &&   $postLugar["lugarId"] == 0){
              if(agregarLugar($postLugar)){
                header('location:index.php?page=home');
                die();
              }
          }
        }
    }
    if($arregloVista['lugarId'] > 0){
      $lugarTmp = obtenerLugar($arregloVista['lugarId']);
      $arregloVista['lugartitulo']=$lugarTmp["lugartitulo"];
      $arregloVista['lugardesc']=$lugarTmp["lugardesc"];
      $arregloVista['lugarimgurl']=$lugarTmp["lugarimgurl"];
      $arregloVista['lugardesccrt']=$lugarTmp["lugardesccrt"];
    }

    renderizar("lugarform",$arregloVista);
  }

  run();
?>
