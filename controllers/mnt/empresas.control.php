<?php
/* Empresas Controller
 * 2015-03-05
 * Created By OJBA
 * Last Modification 2015-03-05 19:25:00
 */
  require_once("libs/template_engine.php");

  require_once("models/empresas.model.php");

  function run(){
    if(mw_estaLogueado()){
      $empresas = array();
      $empresas = obtenerEmpresas();
      renderizar("empresas", array("empresas" => $empresas));
    }else{
      mw_redirectToLogin("index.php?page=empresas");
    }

  }

  run();
?>
