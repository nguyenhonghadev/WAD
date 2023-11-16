<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Diem chuan</h2>
        <form action="code.php" method="post">
            <p> chọn giới tính của bạn<p>
            <select name="gioitinh">
                <option name="nam">Nam</option>
                <option name="nu">Nữ</option>
            </select><br>
            <label for="chieucao">Chiều cao: </label>
            <input type="number" name="cao"><br>
            <label for="cannang">Cân nặng: </label>
            <input type="number" name="nang"><br>           
            <input type="submit" value="xác nhận">
        </form>
    </body>
</html>