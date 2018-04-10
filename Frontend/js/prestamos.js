

function cargarDatosPrestamos(){
	var url = "../../avanzadas/Backend/index.php?mode=consultarDatosPrestamos";
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
	                	ele.id_prestamo, 
	                	ele.codigo_cliente,
	                	ele.fecha_prestamo,
	                	ele.fecha_tope,
	                	ele.fecha_entrega,
	                	ele.n_copias
	                ]).draw(false);
	                html = ""
	             })
	        }
        });

    }
}