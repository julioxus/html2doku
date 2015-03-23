<!doctype html>

<html lang="es">
	<head>
		<meta charset="UTF-8" />
     	<title>HTML2Doku</title>
	</head>
	</body>
<?php
	header('Content-Type: text/html; charset=UTF-8');
	$target_dir = "files/";
	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
	$dest_file =  str_replace(' ', '\ ', $target_file);
	$uploadOk = 1;
	$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
		if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
			exec("soffice --headless --convert-to html $dest_file --outdir $target_dir");

			$info = pathinfo($dest_file);
			$converted_file = $info['filename'] . '.' . 'html';

			exec("html2wiki --dialect=DokuWiki $target_dir$converted_file",$output);
		
			foreach($output as $line){
				echo "$line";
				echo "<br/>";
			}

			exec("rm -f $dest_file");
			exec("rm -f $target_dir$converted_file");
	
		} else {
		    echo "Sorry, there was an error uploading your file.";
		}
	}
?>
	</body>
</html>
