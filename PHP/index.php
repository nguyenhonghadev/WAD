<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Giới tính </h2>
        <form action="code.php" method="post">
            <p> chọn giới tính của bạn<p>
            <select id="gioitinh" name="gioitinh">
                <option value="nam">Nam</option>
                <option value="nu">Nữ</option>
            </select><br>
            <label for="chieucao">Chiều cao (cm): </label>
            <input type="number" name="cao"><br>
            <label for="cannang">Cân nặng (kg): </label>
            <input type="number" name="nang"><br>           
            <input type="submit" value="xác nhận">
        </form>
    </body>
</html>