<?php
// lấy số lớn thứ 2 trong mảng
// $array = array(1,3,5,4,7,6,2,7);
// $max = 0;  
// $max1 = 0;
// for ($i=0; $i < count($array); $i++) { 
//     if ($array[$i] > $max) {
//         $max1 = $max;
//         $max = $array[$i];
//     }
//     elseif ( $array[$i] > $max1 && $array[$i] < $max) {
//         $max1 = $array[$i];
//     }
// }
// echo $max1;

// sắp xếp mảng tăng dần

$array = array(1,3,5,6,4,2);

for ($i=0; $i < count($array); $i++) { 
    for ($j=0; $j < count($array)-1 ; $j++) { 
        if ($array[$j] > $array[$j+1]) {  //so sánh phần tử hiện tại trong mảng với phần tử tiếp theo 
            $array2 = $array[$j+1]; // nếu đúng tạo 1 mảng array mới gán = phần tử tiếp theo 
            $array[$j+1] = $array[$j]; //gán vị trí phần tử tiếp theo = vị trí hiện tại
            $array[$j] = $array2; //gán vị trí phần tử hiện tại vào mảng mới
        }
    }
}
echo implode('->' ,$array);