<?php

// Kiểm tra xem phương thức yêu cầu là GET hay không
if ($_SERVER["REQUEST_METHOD"] == "GET") {

    // Lấy các thông tin đăng ký form "form.html"
    $hoTen = $_GET["hoTen"];
    $PW = $_GET["PW"];
    $email = $_GET["email"];
    $Sdt = $_GET["Sdt"];

    //hiển thị thông tin thông tin đăng ký
    echo "Tên người dùng: " . $hoTen;
    echo "<br>";
    echo "Mật khẩu: " . $PW;
    echo "<br>";
    echo "Email: " . $email;
    echo "<br>";
    echo "Số điện thoại: " . $Sdt;
}

?>
