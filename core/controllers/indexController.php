<?php

$template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : null;

switch ($type) {
  case 'tops':

    // Paginación
    $porpagina = 11;
    $db = new Conexion();

    // Cuantos registros hay
    $rows = $db->query("SELECT COUNT(*) as count FROM posts")->fetchColumn();

    // Cuantas páginas tendrá
    $pages = ceil($rows / $porpagina);
    for ($i = 1; $i <= $pages; $i++) {
      $array_pages[] = $i;
    }

    // Página actual
    $page = min($pages, filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT, array(
      'options' => array(
        'default'   => 1,
        'min_range' => 1,
      ),
    )));

    $offset = ($page - 1) * $porpagina;

    $sql = $db->prepare("SELECT ps.title, ps.points, us.name as user_name
      FROM posts as ps LEFT JOIN users as us ON ps.author = us.id
      ORDER BY points DESC LIMIT :limite OFFSET :offset"
    );
    $sql->bindParam(':limite', $porpagina, PDO::PARAM_INT);
    $sql->bindParam(':offset', $offset, PDO::PARAM_INT);
    $sql->execute();

    if ($posts = $sql->fetchAll()) {
      $template->assign('posts', $posts);
      $template->assign('pages', $array_pages);
    }

    break;

  default:
    # code...
    break;
}

$template->display('home/index.tpl');
