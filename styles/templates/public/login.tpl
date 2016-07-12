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

{include 'general/footer.tpl'}
<script type="text/javascript" src="styles/js/login.js"></script>
</body>
</html>
