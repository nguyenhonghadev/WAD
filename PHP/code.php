<?php

function tinhDiemTrungBinh($toan, $ly, $hoa, $anh, $van, $su) {
    $diemTrungBinh = ($toan + $ly + $hoa + $anh + $van + $su) / 6;
    return $diemTrungBinh;
}

function xepLoai($diemTrungBinh) {
    if ($diemTrungBinh < 5) {
        return "Học sinh yếu";
    } elseif ($diemTrungBinh >= 5 && $diemTrungBinh <= 6.4) {
        return "Học sinh trung bình";
    } elseif ($diemTrungBinh >= 6.5 && $diemTrungBinh <= 7.9) {
        return "Học sinh khá";
    } else {
        return "Học sinh giỏi";
    }
}
$toan = isset($_POST['toan']) ? floatval($_POST['toan']) : 0;
$ly = isset($_POST['ly']) ? floatval($_POST['ly']) : 0;
$hoa = isset($_POST['hoa']) ? floatval($_POST['hoa']) : 0;
$anh = isset($_POST['anh']) ? floatval($_POST['anh']) : 0; 
$van = isset($_POST['van']) ? floatval($_POST['van']) : 0;
$su = isset($_POST['su']) ? floatval($_POST['su']) : 0;

if ($toan >= 0 && $toan <= 10 &&
    $ly >= 0 && $ly <= 10 &&
    $hoa >= 0 && $hoa <= 10 &&
    $anh >= 0 && $anh <= 10 && 
    $van >= 0 && $van <= 10 &&
    $su >= 0 && $su <= 10) {

    $diemTrungBinh = tinhDiemTrungBinh($toan, $ly, $hoa, $anh, $van, $su);
    $xepLoai = xepLoai($diemTrungBinh);

    echo "Điểm trung bình: $diemTrungBinh<br>";
    echo "Xếp loại: $xepLoai";
} else {
    echo "Dữ liệu không hợp lệ";
}
?>
