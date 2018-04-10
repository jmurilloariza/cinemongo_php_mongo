//cuando la pagina este lista llama determinados metodos
$(document).ready(function () {
            enviarForm();
            
            
});

//metodo encargado de enviar el formulario al php para que sea registrado el usuario
   function enviarForm(){
       //funcion para agregar el ajax al submit del formulario
                    $("#loginForm").submit(function (e) {
                    //previene que se envien los datos por la url

                    e.preventDefault();
                    //convierte los datos del formulario a arrays
                    var datos = $(this).serializeArray();
                    
                    //var con la url del archivo php
                    var url = "../Backside/index.php";
                    //var con el id del elemento html en que desea insertar la info
                    //despues del procesamiento
                    var id = "#resul";
                    //llama a la funcion ajax
                    realizarAjax(datos, url, id);
                    
                });
                //funcion ajax para enviar formulario a php
                function realizarAjax(datos, url1, id) {
                    
                    $.ajax({
                        data: datos,
                        url: url1,
                        type: 'POST',
                        //esta funncion se ejecuta cuando el php a terminado de procesar
                        //con el resultado e inserta el resultado en algun elemento html
                        success: function (response) { 
                            alert(response);
                            if(response=="ok"){
                                alert("bienvenido a casi facebook");
                                window.location.href="../Frontside/index.html"
                                
                            }else{
                            
                           
                             alert("Los datos son incorrectos por favor intenta de nuevo");
                            }
                        }
                    });

                }
       
   }