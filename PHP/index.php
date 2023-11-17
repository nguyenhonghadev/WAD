<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>tiền tệ</h2>
        <form action="code.php" method="get">
            <p>Amount:</p>
            <input type="number" name="tien"><br>
            <p>Select currency:</p>
            <select name="ngoaite">
                <option value="USD">USD</option>
                <option value="AUD">AUD</option>
                <option value="JPY">JPY</option>
                <option value="EUR">EUR</option>
            </select>
            <input type="submit" value="Convert">
        </form>
    </body>
</html>