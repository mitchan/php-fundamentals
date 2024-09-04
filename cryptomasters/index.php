<!DOCTYPE html>
<title>Crypto masters</title>

<h1>Crypto Masters</h1>

<form action="convert.php" method="POST">
	<label for="amount">Amount</label>
	<input id="amount" name="amount" type="number">
	
	<label for="crypto">CryptoCurrency</label>
	<select id="crypto" name="crypto">
		<option>BTC</option>
		<option>ETH</option>
	</select>

	<button type="submit">Convert</button>
</form>
