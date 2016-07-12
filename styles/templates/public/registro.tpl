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

  <script type="text/javascript" src="styles/js/register.js"></script>
{include 'general/footer.tpl'}
</body>
</html>
