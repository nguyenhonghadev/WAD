<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
  echo "<h1> Quy đổi tiền tệ </h1>";      
  $ngoaite = $_GET['ngoaite'];
  $tien = $_GET['tien'];
  $doitien = array ("USD"=>22300, "EUR"=>27300, "SGD"=>1700, "JPY"=>120);
  echo $tien ." ". $ngoaite ." "."=" . number_format($tien*$doitien[$ngoaite]). " "."Việt nam đồng";
        ?>
    </body>
</html>