<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nguyễn Hồng Hà</title>
</head>
<html>

<head>
    <title>Nhập số</title>
</head>

<body>
    <?php
$a = intval($_POST["a"]);
$b = intval($_POST["b"]);
$c = intval($_POST["c"]);
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

?>

</html>
</body>

</html>