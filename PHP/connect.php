<?php 
$servername = "localhost";
$username='root';
$password ="";
$db="mydb";
$conn = new mysqli($servername,$username,$password,$db);
if($conn->connect_error){
    echo"kết nối bị lỗi",$conn->connect_error;
}
echo "Kết nối thành công <br>";
?>