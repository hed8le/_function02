<!DOCTYPE html>
<html>

<head>
	<title>...</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
	<!-- PHP Coding -->
	<?php  
		// Function
		function quadrieren($x) {
			$erg = $x * $x;
			return $erg;
		}

		echo "Funktion quadrieren() wird aufgerufen.<br>";
		echo "Das Ergebnis ist: " . quadrieren(5);

		function addiere($x = 5, $y = 7) {
			return $res = $x + $y;
		}

		echo "<br>Das Ergebnis ist: " . addiere();

		// Array
		// Indexed Array
		$a = array("VW", "Mercedes", 2);
		$length = count($a);
		echo "<br>Anzahl Array-Felder: " . $length;

		// Associative Array
		$b = array("Martin"=>"23", "Ben"=>"28", "Linda"=>"33");
		echo "<br>Alter von Ben: " . $b['Ben'];
	?>
	
	<p>************************************************</p>
	<p><strong>Interessante Quellen zu PHP:</strong></p>
	<ul>
		<li><a href="http://www.php.net/manual/de/langref.php" target="_blank">http://www.php.net/manual/de/langref.php</a>
		<li><a href="http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/" target="_blank">http://net.tutsplus.com/tutorials/php/learn-php-from-scratch-a-training-regimen/</a>
		<li><a href="http://us2.php.net/tut.php" target="_blank">http://us2.php.net/tut.php</a>
		<li><a href="http://www.w3schools.com/PHP/Default.asp" target="_blank">http://www.w3schools.com/PHP/Default.asp/</a>
	</ul>
	<script>

	</script>
</body>

</html>