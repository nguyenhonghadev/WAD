<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item</title>
</head>
<body>
    <?php
$items = ["cau.png", "dao.png", "gang.png","kiem.png"];

foreach ($items as $item) {
  echo "<img src='$item' with = 50px height = 50px alt='$item'";

}
?>
</body>
</html>