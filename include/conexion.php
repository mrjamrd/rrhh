<?php
session_start();
abstract class Conectar{
    private $mysqli;

    public function conexion()
    {
      $this->mysqli = new mysqli("localhost","root","","practica1");
      return $this->mysqli;
    }
    public function setnames()
    {
         $this->mysqli->query("SET NAMES 'utf8'");

    }
  }
 ?>
