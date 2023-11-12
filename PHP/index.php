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
        Nhập vào cạnh của tứ giác:<br>
        <input type="number" name="a"><br>
        Nhập vào cạnh còn lại của tứ giác:<br>
        <input type="number" name="b"><br>
        <input type="submit" value="Gửi">
    </form>

        </div>
    </form>
    <?php
    if(isset($_GET['a']) && isset($_GET['b']))
    { 
    $canh1 =(float) $_GET["a"];
    $canh2 =(float) $_GET["b"];
    if ($canh1 ==$canh2) {
        echo"Tứ giác là hình vuông";
    }
    else
    echo"Tứ giác là hình chữ nhật";
}

    ?>
</body>
</html>