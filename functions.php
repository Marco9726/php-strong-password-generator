<?php

function generateRandomPassword($length)
{
	$alphabet = 'abcdefghijklmnopqrstuvwyxz';
	$numbers = '0123456789';
	$symbols = '!?&%<>^+-*/()[]{}@#_=';
	$password = '';

	// finchè la lunghezza della password è inferiore al valore scelto 
	while (strlen($password) < $length) {
		// genero un carattere casuale dalla stringa 'alphabet', dalla posizione 0 finno alla sua lunghezza -1 
		$randomChar = $alphabet[rand(0, strlen($alphabet) - 1)];
		// assegno tale carattere alla password 
		$password .= $randomChar;
	}
	return $password;
}

$length_pwd = '';
if (isset($_GET['length_pwd'])) {
	$length_pwd = $_GET['length_pwd'];
}

$error = false;
if ($length_pwd < 8 || $length_pwd > 32) {
	$error = true;
} else {
	$password = generateRandomPassword($length_pwd);
}
