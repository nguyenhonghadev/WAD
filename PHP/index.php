<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date Selection</title>
</head>
<body>

<?php

$today = getdate();
$curYear = $today["year"];
$curMonth = $today["mon"];
$curDay = $today["mday"];

if (isset($_POST['selectedDay']) && isset($_POST['selectedMonth']) && isset($_POST['selectedYear'])) {
    $selectedDay = $_POST['selectedDay'];
    $selectedMonth = $_POST['selectedMonth'];
    $selectedYear = $_POST['selectedYear'];
    echo "Ngày: $selectedDay, tháng: $selectedMonth, năm: $selectedYear";
}
?>

<form method="post" action="">
    <label for="day">Ngày:</label>
    <select name="selectedDay" id="day">
        <?php

        for ($day = 1; $day <= 31; $day++) {
            echo "<option value=\"$day\">$day</option>";
        }
        ?>
    </select>

    <label for="month">Tháng:</label>
    <select name="selectedMonth" id="month">
        <?php

        for ($month = 1; $month <= 12; $month++) {
            echo "<option value=\"$month\">$month</option>";
        }
        ?>
    </select>

    <label for="year">Năm:</label>
    <select name="selectedYear" id="year">
        <?php

        for ($year = 1900; $year <= $curYear; $year++) {
            echo "<option value=\"$year\">$year</option>";
        }
        ?>
    </select>
    <button type="submit">ok</button>
</form>

</body>
</html>