<?php
class Converter
{

	function __construct(public string $currencyCode) {}

	// methods
	public function convert(float $value = 1): float | bool
	{
		$crypto = $this->currencyCode;
		$url = "https://cex.io/api/ticker/$crypto/USD";
		$json = file_get_contents($url);

		if (!$json) {
			return false;
		}

		$data = json_decode($json);
		return $value * $data->last;
	}
}
