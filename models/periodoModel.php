<?php

include "../config/model.php";
class Periodo extends Model
{
  public $id;
  public $inicio;
  public $fin;

  protected function __construct($inicio=0, $fin=0, $id = 0)
  {
    $this->id = $id;
    $this->inicio = date($inicio);
    $this->fin = date($fin);
  }

  protected function insert()
  {
    $sql = Model::conectar()->prepare("INSERT INTO periodo (inicio, fin) VALUES ('$this->inicio', '$this->fin')");
    $sql->execute();

    return $sql;
  }

  protected function update()
  {
    $sql = Model::conectar()->prepare("UPDATE periodo SET inicio = '$this->inicio', fin = '$this->fin' WHERE id = $this->id");
    $sql->execute();

    return $sql;
  }

  protected function delete()
  {
    $sql = Model::conectar()->prepare("DELETE FROM periodo WHERE id = $this->id");
    $sql->execute();

    return $sql;
  }

  protected function getPeriodos()
  {
    $sql = Model::ejecutar_consulta_simple("SELECT * FROM periodo");
    $sql->execute();

    return $sql;
  }

  protected function getPeriodo() {
    $sql = Model::ejecutar_consulta_simple("SELECT * FROM periodo WHERE id == $this->id");
    $sql->execute();

    return $sql;
  }
}