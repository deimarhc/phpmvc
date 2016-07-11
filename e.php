<?php

require('core/models/class.Conexion.php');
$db = new Conexion();
$sql = $db->query("INSERT INTO users (name, password, mail) VALUES ('a', 'kila', 'a@a.a')");
print_r($db->lastInsertId());