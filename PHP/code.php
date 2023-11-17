<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
        echo"<h3>Mệnh giá tiền</h3>";
       $giatri = array(22300,27300,1700,120);
       $giatri[]= 600;
       $giatri[]= 1600;
       $giatri[0]= 22200;
       
       echo "USD $giatri[0] <br>";
       echo "EUR $giatri[1] <br>";
       echo "SGD $giatri[2] <br>";
       echo "JPY $giatri[3] <br>";
       echo "CHN $giatri[4] <br>";
       echo "AUD $giatri[5] <br>";
      
        ?>
    </body>
</html>