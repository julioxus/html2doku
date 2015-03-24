<!doctype html>

<html lang="es">
	<head>
		<meta charset="UTF-8" />
     	<title>HTML2Doku</title>
		<!-- Bootstrap core CSS -->
    	<link href="bootstrap.min.css" rel="stylesheet">
		<link href="main.css" rel="stylesheet">
	</head>
	<body>
		<div id="contenedorForm">
			<h1>Conversor HTML a Doku</h1>
			<form role="form" method="post" action="/conversor.php">
				<div class="form-group">
					<label for="url">Dirección de la web: </label>
					<input type="text" class="form-control" id="url" name="url"/>
				</div>
				<div class="form-group">
					<label for="id">ID del contenedor: <span id="mensaje">(Opcional)</span></label>
					<input type="text" id="id" class="form-control" name="id"/>
				</div>
				<div class="form-group">
					<label for="class">Clase del contenedor: <span id="mensaje">(Opcional)</span></label>
					<input type="text" id="class" class="form-control" name="class"/>
				</div>
				  <button type="submit" class="btn btn-info">Convertir a Doku</button>
			</form>
		</div>

		<div id="contenedorForm">
			<h1>Conversor Office a Doku</h1>
			<form method="post" action="/conversorWord.php" enctype="multipart/form-data">
				<div class="form-group">
					<label for="fileToUpload">Selecciona un documento Office (Word, Excel, etc)
					<input type="file" name="fileToUpload" class="form-control" id="fileToUpload">
				</div>
				<input type="submit" class="btn btn-info" value="Convertir a Doku" name="submit">
				</form>
		</div>

	<footer>
		&copy; Julio Martínez Martínez-Checa
	</footer>
	</body>
</html>

