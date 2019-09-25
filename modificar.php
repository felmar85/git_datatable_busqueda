<?php

require 'conexion.php';

$id = $_GET['id'];

$sql = "SELECT * FROM clientes WHERE id = '$id'";
$resultado = $mysqli->query($sql);
$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>


<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">MODIFICAR REGISTRO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row[
                            'nombre'];?>" required>
					</div>
				</div>
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" /> <!-- imprime el id oculto para mandarlo al update -->

				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email"  value="<?php echo $row[
                            'correo'];?>"required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono"  value="<?php echo $row[
                            'telefono'];?>">
					</div>
				</div>
			
				<div class="form-group">
					<label for="empresa" class="col-sm-2 control-label">¿Tiene empresa?</label>
					
					<div class="col-sm-10">
						<label class="radio-inline">
                            <input type="radio" id="empresa" name="empresa" value="1" <?php if($row['empresa']=='1') echo
                            'checked'; ?>> SI
						</label>
						
						<label class="radio-inline">
							<input type="radio" id="empresa" name="empresa" value="0"<?php if($row['empresa']=='1') echo
                            'checked'; ?>> NO
						</label>
					</div>
				</div>

				<div class="form-group">
					<label for="nameempresa" class="col-sm-2 control-label">Nombre de la Empresa</label>
					<div class="col-sm-10">
						<input type="nameempresa" class="form-control" id="nameempresa" name="nameempresa" placeholder="Nombre de la Empresa"  value="<?php echo $row[
                            'nameempresa'];?>" required>
					</div>
				</div>	

				<div class="form-group">
					<label for="direccion" class="col-sm-2 control-label">direccion</label>
					<div class="col-sm-10">
						<input type="direccion" class="form-control" id="direccion" name="direccion" placeholder="direccion"  value="<?php echo $row[
                            'direccion'];?>" required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="intereses" class="col-sm-2 control-label">INTERESES</label>
					
					<div class="col-sm-10">
						<label class="checkbox-inline">
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="laptop" <?php if(strpos($row['intereses'], "laptop")!== false) echo 'checked'; ?>> laptop
						</label>
						
						<label class="checkbox-inline">
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="desktop" <?php if(strpos($row['intereses'], "desktop")!== false) echo 'checked'; ?>> desktop
						</label>
						
						<label class="checkbox-inline">
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="impresoras" <?php if(strpos($row['intereses'], "impresoras")!== false) echo 'checked'; ?>> impresoras
						</label>
						
						<label class="checkbox-inline">
                        <input type="checkbox" id="intereses[]" name="intereses[]" value="camaras" <?php if(strpos($row['intereses'], "camaras")!== false) echo 'checked'; ?>> camaras
						</label>
					</div>
				</div>
				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="administracionBytes" class="btn btn-default">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>