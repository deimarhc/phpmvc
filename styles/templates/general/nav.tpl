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
        {if isset($smarty.get.view) && $smarty.get.view == 'index' || !isset($smarty.get.view)}
          <li class="active">
        {else}
        <li>
        {/if}
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
        {if isset($smarty.session.name)}
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{$smarty.session.name}<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="?view=perfil">Mi Perfil</a></li>
              <li><a href="?view=cuenta">Cuenta</a></li>
              <li><a href="?view=logout">Cerrar sesión</a></li>
            </ul>
          </li>
        {else}
          {if isset($smarty.get.view) && $smarty.get.view == 'login'}
            <li class="active">
          {else}
            <li>
          {/if}
          <a href="?view=login">Login</a></li>
          {if isset($smarty.get.view) && $smarty.get.view == 'register'}
            <li class="active">
          {else}
            <li>
          {/if}
          <a href="?view=register">Register</a></li>
        {/if}
      </ul>
    </div>
  </div>
</nav>