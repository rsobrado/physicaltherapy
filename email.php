
<?php 
if (isset($_POST[name]) && isset($_POST[email]) ){
	$name = $_POST[name]);
	$email = $_POST[email]);
	$message = $_POST[message]);
	$to = 'roger.sobrado.e@gmail.com';
	$subject = 'Nuevo mensaje de usuario: '. $name;
	$body = '
		<html lang="en">
		<head>
			<meta charset="UTF-8">
			<title>Document</title>
		</head>
		<body>
			<h2>Hola</h2>
			<p>tienes un nuevo mensaje de '.$name.'</p>
			<p>mensaje:<br>'.$message.' </p>
		</body>
		</html>
	';

	//headers
	$headers = 'From: '.$name.' <'.$email.'> \r\n';
	$headers .= 'Replay-To: '.$email.'\r\n';
	$headers .= 'MIME-Version: 1.0\r\n';
	$headers .= 'Content-Type: html/text; charset-utf-8';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<form action="post">
		<input type="text" name="name"><br>
		<input type="text" name="email"><br>
		<button type="submit">enviar</button>
	</form>
</body>
</html>