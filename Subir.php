<?php

if(isset($_FILES['file']))
{
	$file_name = $_FILES['file']['name'];
	$file_tmp = $_FILES['file']['tmp_name'];

	$upload_folder = "uploads/"; //Esta es la carpeta a la que se subira :v

	$movefile = move_uploaded_file($file_tmp, $upload_folder.$file_name);

	if($movefile)
	{
		echo "File moved successfully";
	}
}

?>

<html>
<head>
	<title></title>  
</head>
<body>

	<fieldset type="submit"><h1 style="text-aling:center;">move_uploaded_file()</h1></fieldset>
	<form method="post" enctype="multipart/form-data"><br><br><input type="file" name="file"><br><br>
		<input type="submit" value="upload"></form>

</body>
</html>