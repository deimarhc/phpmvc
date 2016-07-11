<?php

session_start();

require('core/libs/smarty/Smarty.class.php');
require('core/models/class.Conexion.php');

$view = isset($_GET['view']) ? $_GET['view'] : 'index';

if (file_exists('core/controllers/'. $view . 'Controller.php')) {
  include('core/controllers/'. $view . 'Controller.php');
}
else {

}