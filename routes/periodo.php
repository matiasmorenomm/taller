<?php 
  if(isset($_POST['inicio']) && isset($_POST['fin']) && isset($_POST['id'])) {
    require_once "../controllers/periodoController.php";

    $ins = new PeriodoController();
    $res = $ins->actualizar_periodo();

    echo json_encode($res);
  }else{
    if(isset($_POST['inicio']) && isset($_POST['fin'])){
      require_once "../controllers/periodoController.php";

    $ins = new PeriodoController();
    $res = $ins->nuevo_periodo();

    echo json_encode($res);
    }
  }