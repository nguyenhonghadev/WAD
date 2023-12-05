<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
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