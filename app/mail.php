<?php 

error_reporting(0);

if(isset($_POST[name]) && isset($_POST[email])){
	$name = $_POST[name];
	$email = $_POST[email];
	$message = $_POST[message];
	$to = 'roger.sobrado.e@gmail.com';
	$subject = 'Nuevo mensaje de usuario: '. $name;
	$body = '
		<html >
		<body>
			<h2>Hola</h2>
			<p>tienes un nuevo mensaje de '.$name.'</p>
			<p>mensaje:<br>'.$message.' </p>
		</body>
		</html>
	';

	//headers
	$headers = "From: ".$name." <".$email."> \r\n";
	$headers .= "Replay-To: ".$email."\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset-utf-8";

	$send = mail($to, $subject, $body, $headers);
	if(!$send){
		echo 'errror';
	}

}


?>
