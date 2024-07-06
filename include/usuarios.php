<?php
require_once("conexion.php");

class Trabajo extends Conectar{
  private $db;
  public function __construct()
  {
      $this->db=parent::conexion();
      parent::setnames();
  }

  public function getUser()
  {
    $sql = "SELECT * from usuarios";
    $resultado=$this->db->query($sql);
    $arreglo = array();
    while ($reg = $resultado->fetch_object())
    {
      $arreglo[]=$reg;
    }
    return $arreglo;
  }
  public function loging($user,$pass)
  {
    $sql="SELECT usuario, pass from usuarios where usuario='$user' and pass='$pass' ";
    $resultado=$this->db->query($sql);
    $arreglo = array();
    while ($reg = $resultado->fetch_object())
    {
      $arreglo[]=$reg;
    }
    return $arreglo;

  }
  public function addUser($nombre,$usuario,$pass)
  {
       $sql = "INSERT into usuarios values(null,'".$_POST["nombre"]."','".$_POST["usuario"]."',sha1('".$_POST["pass"]."'),1)";
       $this->db->query($sql);

  }


}


 ?>
