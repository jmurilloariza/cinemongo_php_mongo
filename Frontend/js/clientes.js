

function cargarDatosClientes(){
	var url = "../../avanzadas/Backend/index.php?mode=consultarDatosClientes";
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
            	console.log(response)
            	
	             var json = JSON.parse(response);
	             var t = $('#table').DataTable();
	             
	             json.forEach((ele)=>{
	             	
	             	t.row.add([
	                	ele.dni, 
	                	ele.nombre,
	                	ele.apellido1,
	                	ele.apellido2,
	                	ele.direccion,
	                	ele.email
	                ]).draw(false);	                
	             })
	        }
        });

    }
}