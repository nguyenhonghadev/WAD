<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>slide 25</title>
</head>
<body>
    <h1>Calculator</h1>
    <form action="code.php" method="post">
        <label for="toan">Toán:</label>
        <input type="number" name="toan" step="0.1" min="0" max="10" required><br>

        <label for="ly">Lý:</label>
        <input type="number" name="ly" step="0.1" min="0" max="10" required><br>

        <label for="hoa">Hóa:</label>
        <input type="number" name="hoa" step="0.1" min="0" max="10" required><br>

        <label for="tienganh">Tiếng Anh:</label>
        <input type="number" name="anh" step="0.1" min="0" max="10" required><br>

        <label for="van">Văn:</label>
        <input type="number" name="van" step="0.1" min="0" max="10" required><br>

        <label for="su">Lịch Sử:</label>
        <input type="number" name="su" step="0.1" min="0" max="10" required><br>

        <button type="submit">Tính TB</button>
    </form>
</body>
</html>