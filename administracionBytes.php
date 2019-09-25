﻿<?php
		/* session_start(); */
	require 'conexion.php';

	
	/* if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: ../index.php");
	} */
	
	//$idUsuario = $_SESSION['id_usuario'];
	
	//$sql = "SELECT cedula, nombre FROM usuarios WHERE cedula = '$idUsuario'";
	//$result = $mysqli->query($sql);
	
	//$row = $result->fetch_assoc(); //trae los resultados  usuario que inicia sesion
?>
<html lang="es">
	<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	
	
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>
		
		<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"order": [[1, "asc"]],
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "server_process.php"
				});	
			});
			
		</script>
		
	</head>
	
	<body>
		
		<div class="container">
			<div class="panel panel-success">
					<div class="panel-heading">
						<div class="panel-title", style="text-align:center">Administracion de Consultantes</h1></div>
						<div style="float:right; font-size: 80%; position: relative; top:-10px">
                         <a style="color:white;"  href="index.php">Ir al Inicio </div>
					</div> 
				</div>
			
            
			<div class="row">
				<a href="registrarEmpresa.php" class="btn btn-success	">Nuevo Registro</a>
			</div>
			
			<br>
			
			<div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>Nombre </th>
							<th>Correo</th>
							<th>Empresa</th>
							<th>Telefono</th>
							<th></th>
							<th></th>
						</tr>
					</thead>
					
					
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
						<a class="btn btn-danger btn-ok">Delete</a>
					</div>
				</div>
			</div>
		</div>		<!--Fin Modal -->
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
	</body>
</html>	