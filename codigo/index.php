<!DOCTYPE html>
<html>
<head>
	<title>Codigo de barras</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="JsBarcode.all.min.js"></script>
</head>
<body>
	<div class="container">
		<h1>Lista de Productos</h1>
		<div class="row">
			<div class="col-sm-4">
				<form action="php/insertar.php" method="post">
					<label>Nombre</label>
					<input type="text" name="codigo" class="form-control">
		 				<br>
					<button type="submit" class="btn btn-primary">Generar codigo de barras</button>
					
				</form>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-10">
				<?php require_once "tabla.php"; ?>
			</div>
		</div>
	</div>
</body>
</html>

