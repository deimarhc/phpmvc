<?php

/**
 * Clase para los accesos al sitio
 *
 * @author Edilson Herrera
 **/
class Acceso
{
  private $name;
  private $mail;
  private $password;

  private function encrypt($string) {
    $sizeof = strlen($string) - 1;
    $result = '';
    for($i = $sizeof; $i >= 0; $i--) {
      $result += $string[$i];
    }
    return md5($result);
  }

  public function login()
  {
    try {
      if (isset($_POST['user']) && $_POST['user'] && isset($_POST['pass']) && $_POST['pass']) {
        $this->name = $_POST['user'];
        $this->password = $this->encrypt($_POST['pass']);
          
        // SQL
        $db = new Conexion();
        $sql = $db->query("SELECT * FROM users WHERE name='$this->name' AND password='$this->password'");
        if ($sql->rowCount() > 0) {
          $datos = $sql->fetch(PDO::FETCH_ASSOC);
          $_SESSION['id_user'] = $datos['id'];
          $_SESSION['name'] = $datos['name'];
          $_SESSION['mail'] = $datos['mail'];
          // Recordarme por dos dias
          if (isset($_POST['session']) && $_POST['session']) {
            ini_set('session.cookie_lifetime', time() + (60*60*24*2));
          }
          echo 1;
        } else {
          throw new Exception(2);
        }
      } else {
        throw new Exception('Error: Datos vacíos');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }

  public function recuperar()
  {

  }

  public function registrar()
  {
    try {
      if (isset($_POST['user']) && $_POST['user'] && isset($_POST['pass']) && $_POST['pass'] && isset($_POST['mail']) && $_POST['mail']) {
        $this->name = $_POST['user'];
        $this->mail = $_POST['mail'];
        $this->password = $this->encrypt($_POST['pass']);
          
        // SQL
        $db = new Conexion();
        $sql = $db->query("SELECT id, name FROM users WHERE name='$this->name' OR mail='$this->mail'");
        if ($sql->rowCount() == 0) {
          $insert = $db->query("INSERT INTO users (name, password, mail) VALUES ('$this->name', '$this->password', '$this->mail')");
          $_SESSION['id_user'] = $db->lastInsertId();
          $_SESSION['name'] = $this->name;
          $_SESSION['mail'] = $this->mail;
          echo 1;
        } 
        else if($sql->rowCount() > 0) {
          $datos = $sql->fetch(PDO::FETCH_ASSOC);
          if (strtolower($this->name) == strtolower($datos['name'])) {
            throw new Exception(2);
          }
          else {
            throw new Exception(3);
          }
        }
      } else {
        throw new Exception('Error: Datos vacíos');
      }
    } catch (Exception $e) {
      echo $e->getMessage();
    }
  }
} 