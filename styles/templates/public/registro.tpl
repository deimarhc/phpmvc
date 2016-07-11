{include 'general/header.tpl'}
<body>
  {include 'general/nav.tpl'}

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

  <script>
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
  </script>
{include 'general/footer.tpl'}
