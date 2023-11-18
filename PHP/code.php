<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
    <?php
    $toan = $_POST['toan'];
    $ly = $_POST['ly'];
    $hoa = $_POST['hoa'];
    $anh = $_POST['anh'];
    $van = $_POST['van'];
    $su = $_POST['su'];
    $TB = ($toan + $ly + $hoa + $anh + $van + $su) / 6;
    echo "Học lực của bạn là :";
    if ($toan < 4 || $ly < 4 || $hoa < 4 || $anh < 4 || $van < 4 || $su < 4) {
        echo "Yếu";
    } else {
        if ($TB < 5) {
            echo "Yếu";
        } elseif ($TB < 6.4) {
            echo "Trung bình";
        } elseif ($TB < 7.9) {
            echo "Khá";
        } else  echo "Giỏi";
    }
    ?>
    </body>
</html>