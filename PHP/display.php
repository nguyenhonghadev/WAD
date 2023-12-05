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
    if ($result->num_rows > 0) 
    { while ($row = $result->fetch_assoc())
        { echo "FlightID : ".$row["id"].
               "Oringin :" .$row["oringin"].
               "Destination".$row["destination"].
               "Duration".$row["duration"]."<br>";
        }
    }
    else {
        echo "không có chuyến bay";
    }
    $conn -> close(); 
    ?>

</body>
</html>