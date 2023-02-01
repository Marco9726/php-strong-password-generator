<?php

function generateRandomPassword($length)
{
	$alphabet = 'abcdefghijklmnopqrstuvwyxz';
	$numbers = '0123456789';
	$symbols = '!?&%<>^+-*/()[]{}@#_=';
}

$error = '';
if (isset($_GET['length_pwd']) && $_GET['length_pwd'] !== '') {
	var_dump($_GET['length_pwd']);
} else {
	$error = 'non hai inserito un valore valido';
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
	<title>Document</title>
</head>

<body class="bg-white">
	<div class="container w-75 mt-5">
		<div class="title text-center mb-3">
			<h1>Strong password Generetor</h1>
			<h2 class="text-white">Genera una password sicura</h2>
		</div>
		<!-- <div id="result" class="p-3 rounded-2 mb-3">
			Nessun paramentro inserito
		</div> -->
		<form action="./index.php" method="GET" class="rounded-3 bg-light p-3">
			<?php if ($error != '') { ?>
				<img src="https://media.tenor.com/hYVsWvkpdrMAAAAC/you-didnt-say-the-magic-word-ah-ah.gif" alt="non hai detto la parola magica">
			<?php } ?>
			<div class="password d-flex align-items-center mb-3">
				<div class="col-7">
					Lunghezza password:
				</div>
				<div class="col-5">
					<input type="number" name="length_pwd" id="number" class="p-1 rounded-2">
				</div>
			</div>
			<!-- 
			<div class="options d-flex">
				<div class="col-7">
					Consenti ripetizioni di uno o più caratteri:
				</div>
				<div class="col-5">
					<div class="my-input">
						<input type="radio" name="bool"> Si
					</div>
					<div class="my-input mb-3">
						<input type="radio" name="bool"> No
					</div>
					<div class="my-input">
						<input type="checkbox" name="bool"> Lettere
					</div>
					<div class="my-input">
						<input type="checkbox" name="bool"> Numeri
					</div>
					<div class="my-input">
						<input type="checkbox" name="bool"> Simboli
					</div>
				</div>
			</div> -->
			<div class="buttons my-3">
				<button class="btn btn-primary" type="submit">Genera </button>
				<!-- <input class="btn btn-secondary" type="reset" value="Annulla"> -->
			</div>
		</form>

	</div>
</body>

</html>