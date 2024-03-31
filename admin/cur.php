<?php
function convertCurrency($amount, $fromCurrency, $toCurrency, $exchangeRates, $countries) {
    if ($fromCurrency === $toCurrency) {
        return $amount; // No need to convert if the currencies are the same
    }

    if (!isset($exchangeRates[$fromCurrency]) || !isset($exchangeRates[$toCurrency])) {
        return "Error: Invalid currencies provided.";
    }

    $exchangeRateFrom = $exchangeRates[$fromCurrency];
    $exchangeRateTo = $exchangeRates[$toCurrency];

    // Perform the conversion
    $convertedAmount = round(($amount / $exchangeRateFrom) * $exchangeRateTo, 2);

    // Return the converted amount
    return $convertedAmount;
}

$str = file_get_contents('./admin/countries/countries.json');
$countries = json_decode($str, true);

$ctr = file_get_contents('./admin/countries/ctr.json');
$ctrgsc = json_decode($ctr, true);

$forexstr = file_get_contents('./admin/countries/forex.json');
$forex = json_decode($forexstr, true);

$forexshortcoded = file_get_contents('./admin/countries/forexshortcode.json');
$forexshortcode = json_decode($forexshortcoded, true);



// echo "<pre>";
//       print_r(array_keys($forex['conversion_rates']));
//    echo "</pre>";

// Example exchange rates array (exchange rates against USD)
$exchangeRates =$forex['conversion_rates'];

$exchangeRates =$forex['conversion_rates'];

// Example usage:
// $amount = 1299; // The amount to convert
// $fromCurrency = 'USD'; // The currency code you want to convert from
// $toCurrency = 'AUD'; // The currency code you want to convert to

// $convertedAmount = convertCurrency($amount, $fromCurrency, $toCurrency, $exchangeRates);
// echo "$amount $fromCurrency is equal to $convertedAmount $toCurrency";




?>