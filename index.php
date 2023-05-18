<!DOCTYPE html>
<html>
<head>
	<title>Conversor de Unidade</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body class="container">
	<h1>Conversor de Unidade</h1>
	
	<div class="converter">
		<h2>Quilômetros para Milhas</h2>
		<form method="post">
			<input type="number" name="km" step="any" required>
			<button type="submit" name="km_to_mi">Converter</button>
			<?php
				if (isset($_POST['km_to_mi'])) {
					$km = $_POST['km'];
					$mi = $km * 0.621371;
					echo '<p>' . $km . ' Quilômetros é igual a ' . number_format($mi, 2) . ' Milhas.</p>';
				}
			?>
		</form>
	</div>
	
	<div class="converter">
		<h2>Milhas para Quilômetros</h2>
		<form method="post">
			<input type="number" name="mi" step="any" required>
			<button type="submit" name="mi_to_km">Converter</button>
			<?php
				if (isset($_POST['mi_to_km'])) {
					$mi = $_POST['mi'];
					$km = $mi * 1.60934;
					echo '<p>' . $mi . ' Milhas é igual a ' . number_format($km, 2) . ' Quilômetros.</p>';
				}
			?>
		</form>
	</div>

	<div class="converter">
			<h2>Celsius para Fahrenheit</h2>
			<form method="post">
				<input type="number" name="c" step="any" required>
				<button type="submit" name="c_to_f">Converter</button>
				<?php
					if (isset($_POST['c_to_f'])) {
						$c = $_POST['c'];
						$f = ($c * 1.8) + 32;
						echo '<p>' . $c . ' graus Celsius é igual a ' . number_format($f, 2) . ' graus Fahrenheit.</p>';
					}
				?>
			</form>
		</div>

		<div class="converter">
			<h2>Fahrenheit para Celsius</h2>
			<form method="post">
				<input type="number" name="f" step="any" required>
				<button type="submit" name="f_to_c">Converter</button>
				<?php
					if (isset($_POST['f_to_c'])) {
						$f = $_POST['f'];
						$c = ($f - 32) / 1.8;
						echo '<p>' . $f . ' graus Fahrenheit é igual a ' . number_format($c, 2) . ' graus Celsius.</p>';
					}
				?>
			</form>
		</div>

</body>
</html>
