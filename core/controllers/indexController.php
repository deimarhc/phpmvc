<?php

$template = new Smarty();
$type = isset($_GET['type']) ? $_GET['type'] : null;

switch ($type) {
  case 'tops':

    $db = new Conexion();
    $sql = $db->prepare("SELECT ps.title, ps.points, us.name as user_name
      FROM posts as ps LEFT JOIN users as us ON ps.author = us.id
      ORDER BY points DESC"
    );
    $sql->execute();

    if ($posts = $sql->fetchAll()) {
      $template->assign('posts', $posts);
    }

    break;

  default:
    # code...
    break;
}

$template->display('home/index.tpl');
