<!DOCTYPE html>

<body>
	<h1>Conversion result</h1>

	<?php
	require_once "./classes.php";

	if (isset($_POST["amount"]) && isset($_POST["crypto"])) {
		// Superglobal variables
		$amount = $_POST["amount"];
		$crypto = $_POST["crypto"];

		$converter = new Converter($crypto);
		$value = $converter->convert($amount);

		echo "<p>You want to convert $amount $crypto</p>";
		echo "<h2>You have USD $value</h2>";
	} else {
		echo "Cannot retrieve amount or crypto";
	}
	?>
</body>