<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
        $USD = 23000;
        $AUD = 17000;
        $JPY = 200;
        $EUR = 27000;
        $VND = $_GET['vnd'];  
       echo "<h1>Quy Đổi tiền </h1>";
        if ($_GET['ngoaite'] == "USD") {
            echo "$VND USD =";
            echo $VND*$USD ;
            echo "VNĐ";
        }
        if ($_GET['ngoaite'] == "AUD") {
            echo "$VND AUD =";
            echo $VND*$AUD ;
            echo "VNĐ";
        }
        if ($_GET['ngoaite'] == "JPY") {
            echo "$VND JPY =";
            echo $VND*$JPY ;
            echo "VNĐ";
        }
        if ($_GET['ngoaite'] == "EUR") {
            echo "$VND EUR =";
            echo $VND*$EUR ;
            echo "VNĐ";
        }


        ?>
    </body>
</html>