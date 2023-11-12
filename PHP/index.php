<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra tứ giác là hình gì</title>
</head>
<body>
    <form action="index.php" method="GET">
        <div>
        Nhập Số a:<br>
        <input type="number" name="a"><br>
        Nhập Số b:<br>
        <input type="number" name="b"><br>
        Nhập Số c:<br>
        <input type="number" name="c"><br>
        <input type="submit" value="Gửi">
    </form>

        </div>
    </form>
    <?php
if( isset($_GET['a']) && isset($_GET['b']) && isset($_GET['c']) ){ 
    $a = (float) $_GET["a"];
   $c = (float) $_GET["b"];
   $b = (float) $_GET["c"];
if ($a == 0){
    echo "Phương trình không phải là phương trình bậc 2.";
} else {
    $delta = pow($b, 2) - 4 * $a * $c;
    if ($a == 0 && $delta == 0){
        echo "Phương trình có một nghiệm kép là: x = 0";
    } elseif ($a == 0){
        echo "Phương trình vô nghiệm";
    } else {
        if ($delta > 0) {
            $x1 = (-$b + sqrt($delta)) / (2 * $a);
            $x2 = (-$b - sqrt($delta)) / (2 * $a);
            echo "Phương trình có hai nghiệm phân biệt là: x1 = $x1 và x2 = $x2";
        } elseif ($delta == 0) {
            $x = -$b / (2 * $a);
            echo "Phương trình có một nghiệm kép là: x = $x";
        } else {
            echo "Phương trình vô nghiệm";
        }
    }
}
}

?>
</body>
</html>