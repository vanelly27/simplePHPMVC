<?php
/* Home Controller
 * 2014-10-14
 * Created By OJBA
 * Last Modification 2014-10-14 20:04
 */
  require_once("libs/template_engine.php");
  require_once("models/usuarios.model.php");
  function run(){
    $arrayForLogin = array(
      "usuario_email" => "",
      "usuario_pswd" => "",
      "returnurl" =>""
    );

    if(isset($_POST["usuario_email"])){
      $errores = autenticarUsuario($_POST);
      if(count($errores)){
        $arrayForLogin["errores"] = $errores;
      }else{
        //$_SESSION["usuario_email"] = $_POST["usuario_email"];
        $returnurl = (isset($_POST["returnurl"]))? (urldecode($_POST["returnurl"])||"index.php"):"index.php";
        mw_setEstaLogueado($_POST["usuario_email"],true);
        redirectWithMessage("Credenciales Validadas.",$returnurl);
      }
    }
    $arrayForLogin["returnurl"] = (isset($_GET["returnUrl"]))?$_GET["returnUrl"]:"";

    renderizar("login",$arrayForLogin);
  }


  run();
?>
