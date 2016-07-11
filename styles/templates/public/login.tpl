{include 'general/header.tpl'}
<body>
  {include 'general/nav.tpl'}

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

  <script>
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
  </script>
{include 'general/footer.tpl'}
