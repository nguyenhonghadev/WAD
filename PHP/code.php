<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<p> Tiền của bạn được quy đổi là </p>";
       $ngoaite = $_GET["ngoaite"];
       $tien = $_GET["tien"];
       echo "$tien "; echo "$ngoaite =";
       $USD = 23000;
        $AUD = 17000;
        $JPY = 200;
        $EUR = 27000;
        switch ($ngoaite)
        {
            case "USD" : echo $tien * $USD;
            break;

            case "AUD" : echo $tien * $AUD;
            break;
        
            case "JPY" : echo $tien * $JPY;
            break;

            case "EUR" : echo $tien * $EUR;
            break;
        }
        echo" Việt nam đồng";
        ?>
    </body>
</html>