<?php
/* Smarty version 3.1.29, created on 2016-07-11 00:57:28
  from "C:\xampp\htdocs\phpmvc\styles\templates\home\index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5782d2d81d74d1_66117227',
  'file_dependency' => 
  array (
    '19359f1a0c0d8bd14f936f02e32e4f427e8f7873' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmvc\\styles\\templates\\home\\index.tpl',
      1 => 1468180809,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:general/header.tpl' => 1,
    'file:general/nav.tpl' => 1,
    'file:general/footer.tpl' => 1,
  ),
),false)) {
function content_5782d2d81d74d1_66117227 ($_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:general/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<body>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:general/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 
  <div class="container" style="margin-top: 100px;">
    <div class="jumbotron">
      <h1>Bienvenido al curso!</h1>
      <p class="lead">Plantilla de ejemplo para iniciar el curso de php avanzado.</p>
      <p><a class="btn btn-lg btn-success" href="http://www.prinick.com" role="button">Comenzar!</a></p>
        
    </div>
  </div>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:general/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

<?php }
}
