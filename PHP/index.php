<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <h2>Vui lòng nhập điểm của bạn </h2>
        <form action="code.php" method="post">

  <p><label for="toan">Điểm toán:</label>
  <input type="number" name="toan" id="toan" required min="0" max="10"></p>

  <p><label for="toan">Điểm lý:</label>
  <input type="number" name="ly" id="ly" required min="0" max="10"></p>

  <p><label for="toan">Điểm hóa:</label>
  <input type="number" name="hoa" id="hoa" required min="0" max="10"></p>

  <p><label for="toan">Điểm tiếng anh:</label>
  <input type="number" name="anh" id="ta" required min="0" max="10"></p>

  <p><label for="toan">Điểm văn:</label>
  <input type="number" name="van" id="van" required min="0" max="10"></p>

  <p><label for="toan">Điểm sử:</label>
  <input type="number" name="su" id="van" required min="0" max="10"></p>

  <input type="submit" value="Gửi">
</form>

    </body>
</html>