<?php
session_start();
include __DIR__ . '/functions.php';

if ($length_pwd < 8 || $length_pwd > 32) {
	$error = true;
} else {
	$password = generateRandomPassword($length_pwd);
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>
	<div class="container w-75 mt-5">
		<!-- se errore = true, mostro a schermo l'errore  -->
		<?php if ($error) { ?>
			<img src="https://media.tenor.com/hYVsWvkpdrMAAAAC/you-didnt-say-the-magic-word-ah-ah.gif" alt="non hai detto la parola magica">
			<h2 class="text-danger">AH AH AH! La lunghezza della password deve essere compresa tra 8 e 32</h2>
			<!-- altrimenti, mostro la password  -->
		<?php } else {
			echo 'La tua password è: <strong>' . $password . '</strong>';
		} ?>
	</div>
</body>

</html>