<?php
    require_once("libs/dao.php");

    function obtenerLugares(){
      $lugares = array();
      $strsql = "select * from lugares;";
      $lugares =  obtenerRegistros($strsql);
      return $lugares;
    }

    function agregarLugar($datos){
        $insSql="INSERT INTO `lugares` (`lugartitulo`, `lugardesc`, `lugarimgurl`, `lugardesccrt`) VALUES ('%s', '%s', '%s', '%s');";
        $insSql = sprintf($insSql, $datos["lugartitulo"],$datos["lugardesc"],$datos["lugarimgurl"],$datos["lugardesccrt"]);
        return ejecutarNonQuery($insSql);
    }
    function obtenerLugar($id){
      $lugar = array();
      $strsql = sprintf("select * from lugares where lugarid=%d;", intval($id));
      $lugar =  obtenerUnRegistro($strsql);
      return $lugar;
    }
 ?>
