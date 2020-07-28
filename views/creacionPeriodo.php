<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Nuevo Periodo</title>

  <!-- Bootstrap -->
  <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Custom Theme Style -->
  <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php require_once "extras/navlateral.php" ?>

      <!-- top navigation -->
      <?php require_once "extras/topnavigation.php" ?>
      <!-- /top navigation -->

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Creacion Periodo</h3>
            </div>
          </div>
          <div class="clearfix"></div>
          <div class="row">
            <div class="col-md-12 col-sm-12  ">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Nuevo periodo <small>ingrese fechas del nuevo periodo de postulacion</small></h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br>
                  <form class="form-label-left input_mask" id="formPeriodoCreacion">
                    <div class="form-group col-sm-12">
                      <label class="col-form-label col-sm-2 ">Fecha Inicio </label>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" required name="inicio" id="inicio" placeholder="Halan Brito Briones">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>
                    </div>
                    <div class="form-group col-sm-12">
                      <label class="col-form-label col-sm-2 ">Fecha Fin </label>
                      <div class="col-md-6 col-sm-6  form-group has-feedback">
                        <input type="date" class="form-control has-feedback-left" name="fin" id="fin" placeholder="Halan Brito Briones">
                        <span class="fa fa-calendar form-control-feedback left" aria-hidden="true"></span>
                      </div>
                    </div>
                    <ul class="nav navbar-right panel_toolbox">
                      <button type="submit" class="btn btn-success">Crear</button>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <!-- footer content -->
      <?php require_once "extras/footer.php" ?>
      <!-- /footer content -->
    </div>
  </div>

  <!-- 

  En este archivo JS es donde se encuentra a la escucha del submit para enviar 
  los datos al archivo correspondiente de la carpeta routes
  para este archivo validar cual es la accion a realizar y hacia donde se debe dirigir
  
   -->
  <script src="./validaciones/periodo.js"></script>

  <!-- jQuery -->
  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="vendors/nprogress/nprogress.js"></script>
  <!-- Custom Theme Scripts -->
  <script src="build/js/custom.min.js"></script>
</body>

</html>