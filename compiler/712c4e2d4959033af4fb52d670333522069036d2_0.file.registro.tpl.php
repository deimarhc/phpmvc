<?php
/* Smarty version 3.1.29, created on 2016-07-11 05:05:24
  from "C:\xampp\htdocs\phpmvc\styles\templates\public\registro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57830cf43ea558_80253892',
  'file_dependency' => 
  array (
    '712c4e2d4959033af4fb52d670333522069036d2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmvc\\styles\\templates\\public\\registro.tpl',
      1 => 1468205843,
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
function content_57830cf43ea558_80253892 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:general/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<body>
  <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:general/nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


  <div class="container" style="margin-top: 100px">
  <center>
    <div id="messages" style="width: 500px">
      
    </div>
      <div class="form-signin" style="width: 500px">
        <h2 class="form-signin-heading">Regístrate</h2>
        <label for="inputUser" class="sr-only">Usuario</label>
        <input type="text" id="name" class="form-control" placeholder="Usuario" required="" autofocus="">
        <label for="inputEmail" class="sr-only">Correo electrónico</label>
        <input type="email" id="mail" class="form-control" placeholder="Correo electrónico" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="password" class="form-control" placeholder="Contraseña" required="">
        <button id="btn-register" class="btn btn-md btn-primary btn-block" type="button">Registrarme</button>
      </div>
  </center>
  </div>

  <?php echo '<script'; ?>
>
    window.onload = function() {
      document.getElementById('btn-register').onclick = function() {
        var connect, user, pass, mail, form, result;

        user = document.getElementById('name').value;
        pass = document.getElementById('password').value;
        mail = document.getElementById('mail').value;

        if (user != '' && pass != '' && mail != '') {
          form = 'user=' + user + '&pass=' + pass + '&mail=' + mail;
          connect = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
          connect.onreadystatechange = function() {
            if (connect.readyState == 4 && connect.status == 200) {
              if (parseInt(connect.responseText) == 1) {
                // Éxito
                result = '<div class="alert alert-dismissible alert-success">';
                result += '<button class="close" type="button" data-dismiss="alert">x</button>';
                result += '<strong>Bienvenido, sólo un poco más.</strong>';
                result += '</div>';
                document.getElementById('messages').innerHTML = result;
                window.location = '?view=index';
              } 
              else if (parseInt(connect.responseText) == 2) {
                // ERROR: ya existe usuario
                result = '<div class="alert alert-dismissible alert-danger">';
                result += '<button class="close" type="button" data-dismiss="alert">x</button>';
                result += '<strong>El usuario ya existe.</strong>';
                result += '</div>';
                document.getElementById('messages').innerHTML = result;
              } 
              else {
                // ERROR: ya existe correo
                result = '<div class="alert alert-dismissible alert-danger">';
                result += '<button class="close" type="button" data-dismiss="alert">x</button>';
                result += '<strong>El correo electrónico ya existe.</strong>';
                result += '</div>';
                document.getElementById('messages').innerHTML = result;
              } 
            } else if(connect.readyState != 4){
              // Procesando
                result = '<div class="alert alert-dismissible alert-warning">';
                result += '<button class="close" type="button" data-dismiss="alert">x</button>';
                result += '<strong>Procesando.</strong>';
                result += '</div>';
                document.getElementById('messages').innerHTML = result;
            }
          }
          connect.open('POST', '?view=register', true);
          connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          connect.send(form);
        }
        else {
          // ERROR: sin datos
          result = '<div class="alert alert-dismissible alert-danger">';
          result += '<button class="close" type="button" data-dismiss="alert">x</button>';
          result += '<strong>Todos los campos son obligatorios.</strong>';
          result += '</div>';
          document.getElementById('messages').innerHTML = result;
        }
      };
    }
  <?php echo '</script'; ?>
>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:general/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
