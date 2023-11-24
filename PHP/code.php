<!DOCTYPE html>
<html lang="en" dir= "ltr">
    <head>
        <meta charset= "utf-8">
        <title></title>
    </head>
    <body>
    <?php
    $ngay = $_POST['day'];
    $thang = $_POST['month'];
    $nam = $_POST['year'];
    
    
    $check = false;
    
    if ($thang == 2 && $nam % 4 == 0) { 
        if ($ngay <= 29) {
            $check = true;
        }
    } else if ($thang == 2) { 
        if ($ngay <= 28) {
            $check = true;
        }
    } else if ($thang == 4 || $thang == 6 || $thang == 9 || $thang == 11) { 
        if ($day <= 30) {
            $check = true;
        }
    } 
    
    if ($check == true) {
        echo "Không tồn tại ngày $ngay tháng $thang năm $nam vui lòng nhập lại";
    } else {
        echo "Ngày bạn nhập là: Ngày $ngay tháng $thang Năm $nam";
    }
    
   
   
    ?>
    </body>
</html>