<!doctype html>

<html lang="es">
	<head>
		<meta charset="UTF-8" />
     	<title>HTML2Doku</title>
		<link href="bootstrap.min.css" rel="stylesheet">
		<link href="main.css" rel="stylesheet">
	</head>
	</body>
	<div id="contenedorResultado">
<?php
	include('simple_html_dom.php');
	header('Content-Type: text/html; charset=UTF-8');

	/*function file_get_contents_utf8($fn) {
		$content = file_get_html($fn);
		return mb_convert_encoding($content, 'UTF-8',
		    mb_detect_encoding($content, 'UTF-8, ISO-8859-1', true));
	}*/

	$url = $_POST["url"];
	$id = $_POST["id"];
	$class = $_POST["class"];

	if($url != null){
		$html = file_get_html($url);
	}
	else{
		$html = str_get_html($_POST["html"]);
	}
	
	if($id != null ){
		$id = "#".$id;
		foreach ($html->find($id) as $element){
			 file_put_contents('files/src.html',$element);
			 exec('html2wiki --dialect=DokuWiki files/src.html',$output);

			foreach($output as $line){
				echo "$line";
				echo "<br/>";
			}
		}
	}

	else if($class != null ){
		$class = ".".$class;
		foreach ($html->find($class) as $element){
			 file_put_contents('files/src.html',$element);
			 exec('html2wiki --dialect=DokuWiki files/src.html',$output);

			foreach($output as $line){
				echo "$line";
				echo "<br/>";
			}
		}
	}

	else{
		 file_put_contents('files/src.html',$html);
		 exec('html2wiki --dialect=DokuWiki files/src.html',$output);

		foreach($output as $line){
			echo "$line";
			echo "<br/>";
		}

	}
?>
	</div>

	</body>
</html>
