<?php

/**
* 
*/
class Conexion extends PDO
{
  
  public function __construct()
  {
    try {
      parent::__construct('mysql:host=localhost;dbname=phpmvc', 'root', 'deimar20961');
      $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
      die('ERROR: ' . $e->getMessage());
    }
  }
}