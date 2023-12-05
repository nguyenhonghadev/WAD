<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    require('connect.php');
    mysqli_set_charset($conn, 'UTF-8');
    $sql = "SELECT * FROM flights";
    $result = $conn->query($sql);
   $row = $result ->fetch_assoc();
   echo"<br>"; 
   print_r($row);
   $row = $result ->fetch_assoc(); 
   echo "<br>"; 
   print_r($row);   
   $conn ->close();
    ?>

</body>
</html>