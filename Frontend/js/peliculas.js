
function cargarCopias(){

	$.cookie.raw = true;
	if($.cookie('n')===undefined){
		$.cookie('n', 1)
	}else{
		$.cookie('n', (parseInt($.cookie('n')))+1)
	}


	var cantidadActual =document.getElementById("mas").value;    
     var respuesta = "";
    respuesta += '<h1 class="page-header" style="margin-left: 20px">Copias</h1>'
    respuesta += '<div class="col-lg-6">'
    respuesta += '<form name="registry-pacient" id="registry-cliente-form '+$.cookie('n')+'" role="form">'
    respuesta += '<div class="form-group">'
    respuesta += '<label>Numero de copias</label>'
    respuesta += '<input class="form-control" type="number" name="n_copias_txt'+$.cookie('n')+'" id="n_copias'+$.cookie('n')+'" required>'
    respuesta += '</div>'
	respuesta +='<div class="form-group">'
	respuesta +='<label>Deteriorada</label>'
	respuesta +='<input class="form-control" type="text" name="deteriorada_txt'+$.cookie('n')+'" id="deteriorada'+$.cookie('n')+'" required>'
	respuesta +='</div>'                                
	respuesta +='</div>'
	respuesta +='<div class="col-lg-6">'
	respuesta +='<form name="registry-pacient" id="registry-cliente-form'+$.cookie('n')+'" role="form">'
	respuesta +='<div class="form-group">'
	respuesta +='<label>Formato</label>'
	respuesta +='<input class="form-control" type="text" name="formato_txt'+$.cookie('n')+'" id="formato'+$.cookie('n')+'" required>'
	respuesta +='</div>'
	respuesta +='<div class="form-group">'
	respuesta +='<label>Precio</label>'
	respuesta +='<input class="form-control" type="number" name="precio_txt'+$.cookie('n')+'" id="precio'+$.cookie('n')+'" required>'
	respuesta +='</div>'
	respuesta +='</div>'
     document.getElementById("mas").innerHTML+=respuesta;
}

function cargarDatosPeliculas(){
	var url = "../../avanzadas/Backend/index.php?mode=consultarDatosPeliculas";
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

	             var json = JSON.parse(response);
	             var t = $('#table').DataTable();
	             var html = ""
	             
	             json.forEach((ele)=>{
	             	var i = ele.id_copia;
	             		html = '<img src="'+ele.caratula+'" style="width: 80px; height: 120.641px">'
	             	t.row.add([
	                	html,
	                	ele.id, 
	                	ele.titulo,
	                	ele.ano,
	                	ele.critica,
	                ]).draw(false);
	                html = ""
	             })
							
	        }
        });

    }
}