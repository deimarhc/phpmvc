<?php
/* Smarty version 3.1.29, created on 2016-07-11 04:49:32
  from "C:\xampp\htdocs\phpmvc\styles\templates\general\nav.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5783093c4f03a1_82995986',
  'file_dependency' => 
  array (
    '13d4d655abcb0e9acecfaf45e8cd1f119a5b882c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmvc\\styles\\templates\\general\\nav.tpl',
      1 => 1468205371,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5783093c4f03a1_82995986 ($_smarty_tpl) {
?>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <?php if (isset($_GET['view']) && $_GET['view'] == 'index' || !isset($_GET['view'])) {?>
          <li class="active">
        <?php } else { ?>
        <li>
        <?php }?>
        <a href="?view=index">Inicio</a></li>
        <li><a href="#">Link</a></li>
      </ul>
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <?php if (isset($_SESSION['name'])) {?>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $_SESSION['name'];?>
<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="?view=perfil">Mi Perfil</a></li>
              <li><a href="?view=cuenta">Cuenta</a></li>
              <li><a href="?view=logout">Cerrar sesión</a></li>
            </ul>
          </li>
        <?php } else { ?>
          <?php if (isset($_GET['view']) && $_GET['view'] == 'login') {?>
            <li class="active">
          <?php } else { ?>
            <li>
          <?php }?>
          <a href="?view=login">Login</a></li>
          <?php if (isset($_GET['view']) && $_GET['view'] == 'register') {?>
            <li class="active">
          <?php } else { ?>
            <li>
          <?php }?>
          <a href="?view=register">Register</a></li>
        <?php }?>
      </ul>
    </div>
  </div>
</nav><?php }
}
