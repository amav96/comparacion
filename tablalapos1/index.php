<?php
	session_start();
	$rut='../';
	require_once($rut.'const.php');
  $direc='tablalapos1.php';
  $pagina='lapos1';
  
?>
<!DOCTYPE html>
<html>
<head>
	<title><?= $pagina.TIT; ?></title>
	<?php include_once($rut.'1stylesDAT.php');  ?>
  <?php
    $inf = null;
    require_once($rut.DIRACT.$direc);
    $inf = index($rut);
  ?>
</head>
<body class="hold-transition sidebar-mini sidebar-collapse layout-fixed layout-navbar-fixed">
<div class="wrapper">

	<?php include_once($rut.'1nav.php');  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Express</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Express</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-6">
                    <br>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 text-right">
                    <div class="breadcomb-report">
                      <?php include_once($rut.'export.php'); ?>
                        <div class="btn-group">
                            <button type="button" class="btn btn-warning"><i class="fas fa-file-import"></i> Importar</button>
                            <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="caret"></span>
                                <span class="sr-only">T</span>
                            </button>
                            <div class="dropdown-menu" role="menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(68px, 38px, 0px);">
                                <button class="dropdown-item" type="button" data-toggle="modal" data-target="#importar">Importar CSV <i class="fas fa-file-excel"></i></button>
                                <a class="dropdown-item" href="<?= substr($direc, 0, -4); ?>.csv">Muestra <i class="fas fa-file-excel"></i></a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <hr>

    <!-- Main content -->
    <?php if (isset($_SESSION['stat']) || isset($_SESSION['Mysqli_Error'])): ?>
        <section class="content">
            <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-sm-12">
                        <?php
                            if (isset($_SESSION['Mysqli_Error'])) {
                                echo $_SESSION['Mysqli_Error'];
                            }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    <?php endif ?>
    <!-- /.content -->

    
    <!-- Main content -->
    <section class="content pb-6">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-4 text-center">
                    <h3>Lista de <?php echo $pagina; ?></h3>
                </div>
                <div class="col-sm-4 text-right">
                </div>
            </div>
                
            <hr>

            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div id="div1" class="col-sm-12">
                        <table id="example1" class="dataTable table table-bordered table-hover">
                            <?php
                                echo $inf;
                                $inf=null;
                            ?>
                        </table>
                    </div>
                    <br>
                    <br>
                    <br>
                </div>
            </div>
        </div>
    </section>
  </div>
  
	<?php include_once($rut.'4footer.php');  ?>

	<?php include_once($rut.'2javaDAT.php');  ?>

  <!-- Modal -->
  <div class="modal fade" id="importar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form method="post" enctype="multipart/form-data" action="<?= ACTI.$direc; ?>">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Importar Números</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="form-group">
            <label for="recipient-name" class="col-form-label">Seleccione CSV de Excel:</label>
              <input type="file" name="sel_file" class="form-control" required="required" >
              <label for="recipient-name" class="col-form-label">Fecha de ingreso:</label>
              <input type="date" name="fecha_de_ingreso" class="form-control" required="required" >
              <label for="recipient-name" class="col-form-label">Canal de ingreso:</label>
              <input type="text" name="canal_de_ingreso" class="form-control" required="required" >
              <label for="recipient-name" class="col-form-label">Operador</label>
              <input type="text" name="administrador" class="form-control" required="required">
              <input type="hidden" value ="1" name="id_fecha" class="form-control" required="required" >
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" name="importar" class="btn btn-primary">importar</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>
<?php
  unset($_SESSION['Mysqli_Error']);
?>