<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Currency Exchange</title>
</head>
<body>
    <h3>slide26</h3>
    <form action="" method="get">
        <p>Amount:</p>
        <input type="number" name="amount" required>
        <p>Select currency</p>
        <select name="currency" required>
            <option value="USD">USD</option>
            <option value="EUR">EURO</option>
            <option value="SGD">SINGAPORE DOLLAR</option>
            <option value="JPY">JAPANESE YEN</option>
        </select>
        <input type="submit" value="Convert">
    </form>

    <?php
    $exchangeRate = array("USD"=>22300, "EUR"=>27300, "SGD"=>17000, "JPY"=>120);

    if (isset($_GET['amount'], $_GET['currency'])) {
        $amount = $_GET['amount'];
        $currency = $_GET['currency'];

        if (is_numeric($amount) && $amount >= 0 && array_key_exists($currency, $exchangeRate)) {
            $convertedAmount = $amount * $exchangeRate[$currency];
            echo "<p>$amount $currency is equal to " . number_format($convertedAmount) . " VND</p>";
        } else {
            echo "<p>Please enter a valid amount and select a valid currency.</p>";
        }
    }
    ?>
</body>
</html>
