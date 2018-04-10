<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cinema</title>

    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core CSS -->
    <link href="./vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="./vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="./css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="./vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    
    <link href="./vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Date picker -->
    <link href="./vendor/datepicker/css/datepicker.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <?php include('header.php') ?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registro Prestamo</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="form-pacient">
                 <div class="row">
                <div class="col-lg-6">
                <form name="registry-date" id="registry-prestamo-form" role="form">
                  <input type="hidden" value="" id="id_copias" name="id_copia">
                    <div class="form-group">
                     <label>Cliente</label>
                      <select class="form-control" name="cliente_txt" id="cliente" required>
                         <option value="null">Seleccione un Cliente</option>
                      </select>
                     </div>
                     <label>Fecha Entrega</label>
                     <div  class="input-group date" data-provide="datepicker" id="datePicker">
                     <input class="form-control" type="text" name="fecha_entrega_txt" id="entrega"  data-provide="datepicker" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                     </div>

                </div>
                
                 <div class="col-lg-6">   
                 <!--   <div class="form-group">
                     <label>Paciente</label>
                      <select class="form-control" name="paciente_txt" id="paciente" required>
                         <option value="null">Seleccione un paciente</option>
                      </select>
                     </div> -->
                     <div class="form-group">
                        <label>Pelicula</label>
                        <div class="row">
                            <div class="col-lg-6">
                              <select class="form-control" name="pelicula_txt" id="peliculas" required>
                                 <option value="null">Seleccione un Pelicula</option>
                              </select>
                            </div>
                            <div class="col-lg-6">
                              <span class="input-group-btn">
                                 <button class="btn btn-warning btn-reset" onclick="cargarTabla()" type="button">Reset</button>
                              </span>
                            </div>
                        </div>
                     </div>

                     <div class="form-group">
                     <label>Fecha Tope</label>
                     <div  class="input-group date" data-provide="datepicker" id="datePicker">
                     <input class="form-control" type="text" name="fecha_tope_txt" id="tope"  data-provide="datepicker" required>
                      <div class="input-group-addon">
                        <span class="glyphicon glyphicon-th"></span>
                      </div>
                     </div>
                     </div>
                </div>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            Seleccione La copia
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-hover" id="table">
                                <thead>
                                    <tr>
                                        <th>Numero Copias</th>
                                        <th>Deteriorada</th>
                                        <th>Formato</th>
                                        <th>Precio</th>
                                        <th>Prestamo</th>
                                    </tr>
                                </thead>
                                <tbody>
                                  
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
                 <div class="form-group">
                    <label>Cantidad</label>
                    <input class="form-control" type="number" name="cantidad_txt" id="cantidad" required>
                    </div>
                </div>
                    <div class="text-center" style="padding-left:30% ; padding-right: 30%">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Registrar</button>
                    <input type="hidden" value="registrarPrestamo" name="mode">
                    
                    </div>
                </form>
            </div>    
            </div>    

            </div>    

        </div>


        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
     <!-- JS verificar Sesion -->
    
     <!-- Mis JS -->
    <script src="./js/registroPrestamo.js"></script>

     <!-- Date picker -->
      <script src="./vendor/datepicker/js/bootstrap-datepicker.js"></script>
    
    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morrisjs/morris.min.js"></script>
    <script src="./data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="./js/sb-admin-2.js"></script>

    <script src="./vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="./vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="./vendor/datatables-responsive/dataTables.responsive.js"></script>

    <script src="./js/jquery.cookie.js"></script>

</body>

</html>
