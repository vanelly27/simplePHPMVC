<?php
/* Productos Controller
 * 2016-11-02
 * Created By OJBA
 */
  require_once("libs/template_engine.php");

  require_once("models/productos.model.php");

  function run(){
    $arreglo_a_vista = array();

    $arreglo_a_vista["txtNombreProducto"] = "";
    if(isset($_SESSION["productos_txtNombre"])){
      $arreglo_a_vista["txtNombreProducto"] = $_SESSION["productos_txtNombre"];
    }

    if(isset($_POST["txtNombreProducto"])){
      $arreglo_a_vista["txtNombreProducto"] =$_POST["txtNombreProducto"];
      $_SESSION["productos_txtNombre"] = $arreglo_a_vista["txtNombreProducto"];
    }
    $producto = array();
    if(  $arreglo_a_vista["txtNombreProducto"] == ""){
        $productos = productos_obtenerTodos();
    }else{
      $productos = productos_obtenerPorNombre($arreglo_a_vista["txtNombreProducto"]);
    }

    $productosNew = array();
    foreach($productos as $producto){
      $producto["productoestdsc"] = ($producto["productoest"] == "ACT")?"Activo":"Inactivo";
      $productosNew[] = $producto;
    }
    $arreglo_a_vista["productos_result"] = $productosNew;



    renderizar("productos_list",$arreglo_a_vista, "loggedLayout.view.tpl");
  }

  if(mw_estaLogueado()){
    run();
  }else{
      mw_redirectToLogin("index.php?page=productos");
  }


?>
