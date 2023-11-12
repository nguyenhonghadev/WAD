<?php

// Kiểm tra xem phương thức yêu cầu là POST hay không
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Lấy các thông tin đăng ký form "form.html"
    $hoTen = $_POST["hoTen"];
    $PW = $_POST["PW"];
    $email = $_POST["email"];
    $Sdt = $_POST["Sdt"];

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
