<?php
require_once "../models/periodoModel.php";

class PeriodoController
{
  public function nuevo_periodo()
  {
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];
    $periodo = new Periodo($inicio, $fin);

    $model = new Model();
    $hola = $model->limpiar_cadena($fin);

    $guardar = $periodo->insert();

    if ($guardar->rowCount() >= 1) {
      return "Guardado";
    } else {
      return "No guardado";
    }
  }

  public function actualizar_periodo()
  {
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];
    $id = $_POST['id'];
    $periodo = new Periodo($inicio, $fin, $id);

    $guardar = $periodo->insert();

    if ($guardar->rowCount() >= 1) {
      return "Guardado";
    } else {
      return "No guardado";
    }
  }
  public function obtener_periodos() {

  }

  public function obtener_periodo() {

  }
}
