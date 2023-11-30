<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form action="" method="get">
        <p>First number: </p>
        <input type="number" name="firstNumber"><br>
        <p>Second number: </p>
        <input type="number" name="secondNumber"><br>
        <p></p>
        <input type="submit" name="add" value="+">
        <input type="submit" name="minus" value="-">
        <input type="submit" name="multiply" value="*">
        <input type="submit" name="devide" value="/">
    </form>

<?php
    if (isset($_GET['add'])){
        $result = $_GET["firstNumbrt"] + $_GET["secondNumber"];
        echo $result;
    }
    elseif (isset($_GET['minus'])){
        $result = $_GET["firstNumbrt"] - $_GET["secondNumber"];
        echo $result;
    }
    elseif (isset($_GET['multiply'])){
        $result = $_GET["firstNumbrt"] * $_GET["secondNumber"];
        echo $result;
    }
    elseif (isset($_GET['devide'])){
        $result = $_GET["firstNumbrt"] / $_GET["secondNumber"];
        echo $result;
    }
?>
</body>
</html>