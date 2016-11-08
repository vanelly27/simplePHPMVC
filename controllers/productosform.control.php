<?php
/* Productos Form Controller
 * 2016-11-07
 * Created By OJBA
 */
  require_once("libs/template_engine.php");
  require_once("models/productos.model.php");

  function run(){
    $productos_modes=array(
      "INS" => "Ingreso de Nuevo Producto",
      "UPD" => "Actualizar Producto",
      "DEL" => "Eliminar Producto",
      "DSP" => "Datos del Producto"
    );
    $producto_form_data = array();
    $producto_form_data["mode"]="INS";
    $producto_form_data["productobarra"] = "";
    $producto_form_data["productoIsEnabled"] = "";
    $producto_form_data["productodsc"] = "";
    $producto_form_data["productocod"] = "";
    $producto_form_data["productoid"] = "";

    if(isset($_GET["mode"])){
      $producto_form_data["mode"]=$_GET["mode"];
    }

    if(isset($_POST["txt_productocod"])){
      $producto_form_data["productodsc"] = $_POST["txt_productodsc"];
      $producto_form_data["productocod"] = $_POST["txt_productocod"];
      $producto_form_data["productobarra"] = $_POST["txt_productobarra"];
      if($producto_form_data["mode"]=="INS"){
        $resultado = productos_insert($producto_form_data["productocod"],
                         $producto_form_data["productodsc"],
                         $producto_form_data["productobarra"]
                          );
        if($resultado){
          redirectWithMessage("Producto Guardadp Exitosament","index.php?page=productos");
        }
      }
    }

    $producto_form_data["producto_modo"]=$productos_modes[$producto_form_data["mode"]];

    renderizar("producto_form",$producto_form_data);
  }


  run();
?>
