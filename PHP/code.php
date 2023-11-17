<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
        <?php
            $ccao = $_POST["cao"];
            $cnang = $_POST["nang"];
            $Gioitinh = $_POST["gioitinh"];
        if($Gioitinh=="nam" && $ccao>160 && $cnang>50) echo "Dat yeu cau";
        elseif ($Gioitinh=="nu" && $ccao>150 && $cnang>50 && $cnang<70) echo "Dat yeu cau";
       else echo "khong dạt yeu cau";

        ?>
    </body>
</html>