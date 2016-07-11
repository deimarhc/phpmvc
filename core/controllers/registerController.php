<?php

if (!isset($_SESSION['id_user'])) {
  if ($_POST) {
    include('core/models/class.Acceso.php');
    $acceso = new Acceso();
    $acceso->registrar();
    exit;
  }
  else {
    $template = new Smarty();
    $template->display('public/registro.tpl');
  }
}
else {
  header('location: ?view=index');
}