<?php 
/* 

  En este archivo es donde validaremos que accion se debe realizar
  dependiendo de los aprametros que vengan desde el js que hace el llamado a este archivo

  Aqui deberiamos validar tambien primero antes de ejecutar cualquier cosa si es que viene una session
  para asi asegurarnos de que es una persona que se valido su ingreso anteriormente

*/
  if(isset($_POST['inicio']) && isset($_POST['fin']) && isset($_POST['id'])) {
    /* En esta accion realizaremos un update ya que vienen todo los valores */
    require_once "../controllers/periodoController.php";

    $ins = new PeriodoController();
    $res = $ins->actualizar_periodo();

    echo json_encode($res);
  }else{
    if(isset($_POST['inicio']) && isset($_POST['fin'])){
      /* En esta condicion realizaremos la creacion del periodo ya que tendremos ambos valores solicitados */
      require_once "../controllers/periodoController.php";

    $ins = new PeriodoController();
    $res = $ins->nuevo_periodo();

    echo json_encode($res);
    }else{
      if(isset($_POST['id'])){
        /* En esta accion seleccionaremos solo un periodo */
        require_once "../controllers/periodoController.php";

        $ins = new PeriodoController();
        $res = $ins->obtener_periodo();

        echo json_encode($res);
      }else{
        /* Al no venir ningun paremero se sasume que quiere obtener todo los periodos */
        require_once "../controllers/periodoController.php";

        $ins = new PeriodoController();
        $ins->obtener_periodos();

        echo json_encode($res);
      }
    }
  }