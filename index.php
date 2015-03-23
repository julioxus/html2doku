<!doctype html>

<html lang="es">
	<head>
		<meta charset="UTF-8" />
     	<title>HTML2Doku</title>
	</head>
	<body>
		<h1>Conversor HTML a Doku</h1>
		<form method="post" action="/conversor.php">
		    <label for="url">Dirección de la web: </label>
		    <input type="text" id="url" name="url"/>
			<br />
			<h3>Opcional:</h3>
			<label for="id">ID del contenedor: </label>
			<input type="text" id="id" name="id"/>
			<br/><br/>
			<label for="class">Clase del contenedor: </label>
			<input type="text" id="class" name="class"/>
			<br/><br/>
		  	<button type="submit" class="btn-lg btn-default">Convertir a Doku</button>
		</form>
	<br /><br />

	
	<h1>Conversor Office a Doku</h1>
	<form method="post" action="/conversorWord.php" enctype="multipart/form-data">
		Selecciona un documento Office (Word, Excel, etc):
		<br/>
		<input type="file" name="fileToUpload" id="fileToUpload">
		<br/><br/>
		<input type="submit" value="Convertir a Doku" name="submit">
		</form>
	<br /><br />

	<footer>
		&copy; Julio Martínez Martínez-Checa
	</footer>
	</body>
</html>

