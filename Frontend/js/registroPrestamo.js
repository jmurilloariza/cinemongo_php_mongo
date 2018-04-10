//cuando la pagina este lista llama determinados metodos
$(document).ready(function () {
    cargarCliente();
    //cargarPacientes();
    enviarForm();
    cargarPeliculas();
});

function enviarForm(){
       //funcion para agregar el ajax al submit del formulario
                    $("#registry-prestamo-form").submit(function (e) {
                    //previene que se envien los datos por la url
                    e.preventDefault();
                    //convierte los datos del formulario a arrays
                    var datos = $(this).serializeArray();
                    document.getElementById("id_copias").value=$.cookie('id');
                    //var con la url del archivo php
                    var url = "../../avanzadas/Backend/index.php";
                    //var con el id del elemento html en que desea insertar la info
                    //despues del procesamiento
                    console.log(document.getElementById("id_copias").value)
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

                            var json = JSON.parse(response);
                            if(json.success === "0"){
                                alert(json.message)
                                location.reload(true)
                            }else{
                                alert(json.message);
                            }
                            
                        }
                    });

                }
       
   }

function cargarCliente(){
    
	var url = "../../avanzadas/Backend/index.php?mode=consultarClientes";
	//var con el id del elemento html en que desea insertar la info
	//despues del procesamiento
	//llama a la funcion ajax
	realizarAjax( url);
    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {
    	console.log(url1)
        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html
            success: function (response) {
	             var respuesta=" <option value='null'>Selecione un Cliente</option>";
	             var json = JSON.parse(response);
	             for (var i = 0; i < json.length; i++) {
	                respuesta += '<option value="'+json[i].dni+'">' ;
	                respuesta += json[i].dni;
	                respuesta += '-';
	                respuesta += json[i].nombre + ' ' + json[i].apellido1;
	                respuesta += '</option>';
	             }
	            
	            if(json.length!==0){
	            	document.getElementById("cliente").innerHTML = respuesta;
	            }else{
		            var resp = '<option>No hay clientes registrados</option>';
		            document.getElementById("cliente").innerHTML = resp;
	            }
							
	        }
        });

    }

}

function cargarPeliculas(){
    console.log('copias')
	var url = "../../avanzadas/Backend/index.php?mode=consultarPeliculas";
	//var con el id del elemento html en que desea insertar la info
	//despues del procesamiento
	//llama a la funcion ajax
	realizarAjax( url);
    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {
    	console.log(url1)
        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html
            success: function (response) {
            	
	             var respuesta=" <option value='null'>Selecione una Pelicula</option>";
	             var json = JSON.parse(response);
	             console.log(response);
	             for (var i = 0; i < json.length; i++) {
	                respuesta += '<option value="'+json[i].titulo+'+"">' ;
	                respuesta += json[i].titulo;
	                respuesta += '</option>';
	             }
	            
	            if(json.length!==0){
	            	document.getElementById("peliculas").innerHTML = respuesta;
	            }else{
		            var resp = '<option>No hay peliculas registradas</option>';
		            document.getElementById("peliculas").innerHTML = resp;
	            }
							
	        }
        });

    }

}

function cargarTabla(){

	var x = document.getElementById("peliculas").selectedIndex;
    var y = document.getElementById("peliculas").options;

	var url = '../../avanzadas/Backend/index.php?mode=consultarCopias&titulo='+y[x].text
	//var con el id del elemento html en que desea insertar la info
	//despues del procesamiento
	//llama a la funcion ajax
	realizarAjax(url);
    //funcion ajax para enviar formulario a php
    function realizarAjax(url1) {
    	console.log(url1)
        $.ajax({
            url: url1,
            type: 'GET',
            //esta funncion se ejecuta cuando el php a terminado de procesar
            //con el resultado e inserta el resultado en algun elemento html
            success: function (response) {
	             var json = JSON.parse(response);
	             var t = $('#table').DataTable();
	             var html = ""
	             
	             json.forEach((ele)=>{
	             	var i = ele.id_copia;
	             		html = '<button type="button" class="btn btn-info" onClick="$.cookie('+"'id', "+"'"+i+"'"+'); alert('+"'Se ha añadido la pelicula, por favor ingresa la cantidad.'"+')">';
						html += 'Prestar';
						html += '</button>';
	             	console.log(html)
	             	t.row.add([
	                	ele.n_copias, 
	                	ele.deteriorada,
	                	ele.formato,
	                	ele.precio,
	                	html
	                ]).draw(false);
	                html = ""
	             })
	             						
	        }
        });

    }
} 

function alertar(ale){
	alert(ale)
}

