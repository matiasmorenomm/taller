<?php

include "../Config/model.php";

class Periodo extends Model
{
  public $id;
  public $inicio;
  public $fin;

  public function __construct($inicio, $fin, $id = 0)
  {
    $this->id = $id;
    $this->inicio = date($inicio);
    $this->fin = date($fin);
  }

  public function insert()
  {
    $sql = Model::conectar()->prepare("INSERT INTO periodo (inicio, fin) VALUES ('$this->inicio', '$this->fin')");
    $sql->execute();

    return $sql;
  }

  public function update()
  {
    $sql = Model::conectar()->prepare("UPDATE periodo SET inicio = '$this->inicio', fin = '$this->fin' WHERE id = $this->id");
    $sql->execute();

    return $sql;
  }

  public function delete()
  {
    $sql = Model::conectar()->prepare("DELETE FROM periodo WHERE id = $this->id");
    $sql->execute();

    return $sql;
  }

  public function getPeriodos()
  {
    $sql = Model::ejecutar_consulta_simple("SELECT * FROM periodo");

    return $sql;
  }
}