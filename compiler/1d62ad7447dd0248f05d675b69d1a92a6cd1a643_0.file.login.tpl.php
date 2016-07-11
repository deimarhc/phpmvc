<?php
/* Smarty version 3.1.29, created on 2016-07-11 03:26:11
  from "C:\xampp\htdocs\phpmvc\styles\templates\public\login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5782f5b33529c5_18047733',
  'file_dependency' => 
  array (
    '1d62ad7447dd0248f05d675b69d1a92a6cd1a643' => 
    array (
      0 => 'C:\\xampp\\htdocs\\phpmvc\\styles\\templates\\public\\login.tpl',
      1 => 1468200369,
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
function content_5782f5b33529c5_18047733 ($_smarty_tpl) {
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
        <h2 class="form-signin-heading">Inicia Sesión</h2>
        <label for="inputEmail" class="sr-only">Usuario</label>
        <input type="text" id="name" class="form-control" placeholder="Usuario" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Contraseña</label>
        <input type="password" id="password" class="form-control" placeholder="Contraseña" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" id="session" value="1"> Recordarme
          </label>
        </div>
        <button id="btn-login" class="btn btn-md btn-primary btn-block" type="button">Iniciar sesión</button>
      </div>
  </center>
  </div>

  <?php echo '<script'; ?>
>
    window.onload = function() {
      document.getElementById('btn-login').onclick = function() {
        var connect, user, pass, session, form, result;

        user = document.getElementById('name').value;
        pass = document.getElementById('password').value;
        session = document.getElementById('session').checked ? true : false;

        if (user != '' && pass != '') {
          form = 'user=' + user + '&pass=' + pass + '&session=' + session;
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
              } else {
                // ERROR: credenciales incorrectas
                result = '<div class="alert alert-dismissible alert-danger">';
                result += '<button class="close" type="button" data-dismiss="alert">x</button>';
                result += '<strong>Credenciales incorrectas.</strong>';
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
          connect.open('POST', '?view=login', true);
          connect.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
          connect.send(form);
        }
        else {
          // ERROR: sin datos
          result = '<div class="alert alert-dismissible alert-danger">';
          result += '<button class="close" type="button" data-dismiss="alert">x</button>';
          result += '<strong>El usuario y la contraseña no pueden estar vacíos.</strong>';
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
