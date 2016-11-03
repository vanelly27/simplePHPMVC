<?php
/* Acerca Controller
 * 2016-11-02
 * Created By OJBA
 * Last Modification
 */
  require_once("libs/template_engine.php");

  function run(){
    //primer parametro: la vista a generar
    //            views/acerca.view.tpl
    // segundo parametro: los datos utilizados
    //              por la vista (siempre un arreglo ASOCIATIVO)
    renderizar("acerca", array());
  }
  run();
?>
