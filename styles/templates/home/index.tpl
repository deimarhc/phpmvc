
{include 'general/header.tpl'}

<body>
  {include 'general/nav.tpl'}

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            {if isset($smarty.get.type) && $smarty.get.type == 'tops'}
             <li class="active">
            {else}
              <li>
            {/if}
            <a href="?type=tops">Los mejores</a></li>
            {if !isset($smarty.get.type) || empty($smarty.get.type)}
              <li class="active">
            {else}
              <li>
            {/if}
            <a href="#">Inicio</a></li>
            <li><a href="#">Categoria 1</a></li>
            <li><a href="#">Categoria 2</a></li>
            <li><a href="#">Categoria 3</a></li>
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h2 class="sub-header">Inicio</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width: 65%;">Post</th>
                  <th style="width: 25%;">Autor</th>
                  <th style="width: 5%;">Puntos</th>
                  <th style="width: 5%;">Comentarios</th>
                </tr>
              </thead>
              <tbody>
              {* {foreach $posts as $post} *}
              {foreach from=$posts item=post key=key}
                <tr>
                  <td style="width: 65%;">{$post.title}</td>
                  <td style="width: 25%;">{$post.user_name}</td>
                  <td style="width: 5%;">{$post.points}</td>
                  <td style="width: 5%;"></td>
                </tr>
              {/foreach}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  {include 'general/footer.tpl'}
  <link rel="stylesheet" type="text/css" href="styles/css/home.css">i
</body>
</html>
