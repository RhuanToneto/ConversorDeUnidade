<?php
if (isset($_POST['km_to_mi'])) {
	// converter Quilômetros em Milhas
	$km = $_POST['km'];
	$mi = $km * 0.621371;
	echo $km . ' Quilômetros é igual a ' . $mi . ' Milhas.';
} elseif (isset($_POST['mi_to_km'])) {
	// converter Milhas em Quilômetros
	$mi = $_POST['mi'];
	$km = $mi * 1.60934;
	echo $mi . ' Milhas é igual a ' . $km . ' Quilômetros.';
} elseif (isset($_POST['c_to_f'])) {
	// converter Celsius em Fahrenheit
	$c = $_POST['c'];
	$f = ($c * 1.8) + 32;
	echo $c . ' graus Celsius é igual a ' . $f . ' graus Fahrenheit.';
} elseif (isset($_POST['f_to_c'])) {
	// converter Fahrenheit em Celsius
	$f = $_POST['f'];
	$c = ($f - 32) / 1.8;
	echo $f . ' graus Fahrenheit é igual a ' . $c . ' graus Celsius.';
}
?>
