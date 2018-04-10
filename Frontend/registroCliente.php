<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cinema</title>

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
                    <h1 class="page-header">Registrar Cliente</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="form-pacient">
                <div class="row">
                <div class="col-lg-6">
                <form name="registry-pacient" id="registry-cliente-form" role="form">
                    <div class="form-group">
                    <label>DNI</label>
                    <input class="form-control" type="number" name="dni_txt" id="dni" required>
                    </div>
                    <div class="form-group">
                    <label>Nombre</label>
                    <input class="form-control" type="text" name="nombre_txt" id="nombre" required>
                    </div>
                    <div class="form-group">
                    <label>Primer Apellido</label>
                    <input class="form-control" type="text" name="apellido1_txt" id="apellido1" required>
                    </div>
                </div>
                <div class="col-lg-6"> 
                    <div class="form-group">
                    <label>Segundo Apellido</label>
                    <input class="form-control" type="text" name="apellido2_txt" id="apellido2" required>
                    </div>
                    <div class="form-group">
                    <label>Direccion</label>
                    <input class="form-control" name="direccion_txt" id="direccion" required>
                    </div>
                     <div class="form-group">
                        <label>Correo</label>
                        <input class="form-control" type="email" name="correo_txt" id="correo" required>
                     </div>
                    </div>
                </div>
                </div>
                    <div class="text-center" style="padding-left:30% ; padding-right: 30%">
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Registrar</button>
                    <input type="hidden" value="registrarCliente" name="mode"> 
                    
                    </div>
                </form>
            </div>    

        </div>


        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Mis JS -->
    <script src="./js/registro-cliente.js"></script>

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

</body>

</html>
