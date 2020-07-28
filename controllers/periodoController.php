<?php
require_once "../models/periodoModel.php";

class PeriodoController extends Periodo
{
  public function nuevo_periodo()
  {
    /* Obtenemos los valores por medio del get */
    $inicio = $_POST['inicio'];
    $fin = $_POST['fin'];
    
    /* Limpiamos las variables para evitar codigo malisioso */
    $inicio = Model::limpiar_cadena($inicio);
    $fin = Model::limpiar_cadena($fin);

    /* Creamos un Objeto de tipo periodo con los valores definidos anteriormente */
    $periodo = new Periodo($inicio, $fin);
    
    /* Al objeto periodo ejecutamos el metodo insert() para que este nserte dicho periodo en la Base de Datos */
    $guardar = $periodo->insert();

    /* Validamos si se agrego una fila, de ser asi la insercion fue correcta */
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

    $inicio = Model::limpiar_cadena($inicio);
    $fin = Model::limpiar_cadena($fin);
    $id = Model::limpiar_cadena($id);

    $periodo = new Periodo($inicio, $fin, $id);

    $guardar = $periodo->insert();

    if ($guardar->rowCount() >= 1) {
      return "Actualizado";
    } else {
      return "No actualizado";
    }
  }
  public function obtener_periodos() {
     return "respuesta";
  }

  public function obtener_periodo() {

  }
}
