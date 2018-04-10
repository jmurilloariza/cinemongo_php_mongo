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
                    <h1 class="page-header">Registro Pelicula</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
                <div class="row">
                <form name="registry-pacient" id="registry-pelicula-form" role="form">
                    <div class="col-lg-6">
                        <div class="form-group">
                        <label>Titulo</label>
                        <input class="form-control" type="text" name="titulo_txt" id="titulo" required>
                        </div>
                        <div class="form-group">
                        <label>Año</label>
                        <input class="form-control" type="text" name="ano_txt" id="ano" required>
                        </div>
                    </div>
                    <div class="col-lg-6"> 
                        <div class="form-group">
                        <label>Critica</label>
                        <input class="form-control" type="text" name="critica_txt" id="critica" required>
                        </div>
                        <div class="form-group">
                            <label>Caratula</label>
                            <div class="form-group">
                                <div class="input-group input-file" name="Fichier1">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default btn-choose" type="button">Choose</button>
                                    </span>
                                    <input type="text" name="caratula_txt" id="caratura" class="form-control" placeholder='Choose a file...' />
                                    <span class="input-group-btn">
                                         <button class="btn btn-warning btn-reset" type="button">Reset</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group" id="mas"></div>
                    <div class="form-group">
                        <div class="col-lg-6">
                            <div class="text-center" style="padding-left:30% ; padding-right: 30%; padding-bottom: 20px">
                                <input type="button" value="Añadir Copia" onClick="cargarCopias();" return class="btn btn-lg btn-primary btn-block">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-center" style="padding-left:30% ; padding-right: 30%; padding-bottom: 20px">
                                <input type="submit" value="Registrar" class="btn btn-lg btn-primary btn-block"></input>
                                <input type="hidden" value="registrarPelicula" name="mode"> 
                            </div>                            
                        </div>
                    </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="./vendor/jquery/jquery.min.js"></script>
    <!-- Mis JS -->

    <!-- Bootstrap Core JavaScript -->
    <script src="./vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="./vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="./vendor/raphael/raphael.min.js"></script>
    <script src="./vendor/morrisjs/morris.min.js"></script>
    <script src="./data/morris-data.js"></script>


    <script src="./js/jquery.cookie.js"></script>

    <script src="./js/registro-pelicula.js"></script>

    <script src="./js/peliculas.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="./js/sb-admin-2.js"></script>

    <script>
        $.removeCookie('n')
        function bs_input_file() {
            $(".input-file").before(
                function() {
                    if ( ! $(this).prev().hasClass('input-ghost') ) {
                        var element = $("<input id ='file' type='file' class='input-ghost' style='visibility:hidden; height:0'>");
                        element.attr("name",$(this).attr("name"));
                        element.change(function(){
                            console.log(this.value.split('\\')[2])
                            $.cookie('imagen', this.value.split('\\')[2])
                            element.next(element).find('input').val((element.val()).split('\\').pop());
                        });
                        $(this).find("button.btn-choose").click(function(){
                            element.click();
                        });
                        $(this).find("button.btn-reset").click(function(){
                            element.val(null);
                            $(this).parents(".input-file").find('input').val('');
                        });
                        $(this).find('input').css("cursor","pointer");
                        $(this).find('input').mousedown(function() {
                            $(this).parents('.input-file').prev().click();
                            return false;
                        });
                        return element;
                    }
                }
            );
        }
        $(function() {
            bs_input_file();
        });
    </script>

</body>

</html>
