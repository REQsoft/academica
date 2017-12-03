var map;

function initMap(){
	map = new google.maps.Map(document.getElementById('mapa'),{
		center: {lat:1.537901,lng:-77.714539},
		zoom:8});
}

$(document).ready(function(){
	initMap();

	$("#btnViaticos").click(function(){
		alert("s");
		var num_estudiantes = parseInt($("#num_estudiantes").val());
		var num_dias = parseInt($("#numero_dias").val());
		var vDocente=parseInt($("#vDocente").val());
		var vEstudiante=parseInt($("#vEstudiante").val());
		var vConductor=parseInt($("#vConductor").val());
			$.ajax({
				url:$("#url").val()+"inicio/gastos",
				type:"POST",
				data:{vDocente:vDocente,vEstudiante:vEstudiante,vConductor:vConductor,num_estudiantes:num_estudiantes,num_dias:num_dias},
				beforeSend:function(){
					$("#gastos_viaticos").html("Espere un momento...");
				},
				success:function(datos){
					$("#gastos_viaticos").html(datos);
				},
				error:function(){
					$("#gastos_viaticos").html("Conexion no disponible");
				}
			});
	});

});


