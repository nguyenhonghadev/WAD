<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Chọn ngày tháng năm</title>
</head>
<body>
  <h2>Chọn ngày tháng năm</h2>
  <form action="code.php" method="post">
  <?php
 
  // lấy năm hiện tại 
   $today = getdate();
   $curYear = $today["year"];
   //********************************** */
   $days = [];
   for ($i = 1; $i <= 31; $i++) {
     $days[] = $i;
   }

   $months = ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6", "Tháng 7", "Tháng 8", "Tháng 9", "Tháng 10", "Tháng 11", "Tháng 12"];

   $years = [];
   for ($i = 1900; $i <= $curYear; $i++) {
     $years[] = $i;
   }

   echo "Ngày: ";
   echo "<select name='day'>";
   foreach ($days as $day) {
     echo "<option value='$day'>$day</option>";
   }
   echo "</select>";

   echo "Tháng: ";
   echo "<select name='month'>";
   foreach ($months as $month) {
     echo "<option value='$month'>$month</option>";
   }
   echo "</select>";
    
    echo"Năm ";
    echo "<select name='year'>";
    foreach ($years as $year) {
      echo "<option value='$year'>$year</option>";
    }
    echo "</select>";

   
  ?>
  <input type='submit' value='Chọn'>
</body>
</html>
