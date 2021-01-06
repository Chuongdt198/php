<?php
if (!empty($_GET['btn'])){
    // Bước 1: Lấy thông tin
    $year = isset($_GET['year']) ? (int)$_GET['year'] : 0;
    // Bước 2: Lấy năm hiện tại
    $current_year = date('Y');
    // Bước 2: Kiểm tra năm sinh hợp lệ hay không, nếu không thì thông báo
    if ($year <= 0){
        echo 'Năm sinh bạn nhập không hợp lệ';
    }
    else if ($year > $current_year){
        echo 'Năm sinh bạn nhập lớn hơn năm hiện tại';
    }
    else{
        echo 'Số tuổi của bạn là ' . ($current_year - $year);
    }
}
?>
        