function mostrar(){
	$.ajax({
		type:"POST",
		url:"procesos/mostrarDatos.php",
		success:function(r){
			$('#tablaDatos').html(r);
		}
	});
}

function obtenerDatos(id){
	$.ajax({
		type:"POST",
		data:"id=" + id,
		url:"procesos/obtenerDatos.php",
		success:function(r){			
			r=jQuery.parseJSON(r); 
			$('#id').val(r['id']);			
			$('#nombreu').val(r['nombre']);
			$('#usuariou').val(r['usuario']);
			$('#emailu').val(r['email']);
			$('#passwordu').val(r['password']);
			$('#privilegiou').val(r['privilegio']);					
		}
	});
}

function actualizarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/actualizarDatos.php",
		data:$('#frminsertu').serialize(),
		success:function(r){
			console.log(r);
			if(r==1){
				mostrar();
				swal("¡Actualizado correcatamente!", ":D", "success");
			}else{
				swal("¡Error!",":(", "error");
			}
			
		}
	});
	return false;
}

function eliminarDatos(id){
	swal({
		title: "¿Estas seguro de eliminar este registro?",
		text: "!Una vez eliminado no podra recuperarse¡",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				url:"procesos/eliminarDatos.php",
				data:"id=" + id,
				success:function(r){
					if(r==1){					
						mostrar();
						swal("¡Eliminado correcatamente!", ":D", "info");
					}else{
						swal("¡Error!",":(", "error");
					}
					
				}
			});
		} 
	});
}

function insertarDatos(){
	$.ajax({
		type:"POST",
		url:"procesos/insertarDatos.php",
		data:$('#frminsert').serialize(),
		success:function(r){
			if(r==1){
				$('#frminsert')[0].reset();//resetea el formulario
				mostrar();
				swal("¡Agregaro correcatamente!", ":D", "success");
			}else{
				swal("¡Error!",":(", "error");
			}
			
		}
	});
	return false;
}