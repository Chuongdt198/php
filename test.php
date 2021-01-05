<?php
echo "<pre>";

// $a = 12330;
// $a = (string)$a;
// // $a = is_string($a);
// var_dump($a);
// $antoi = "Nam";
// echo "Nam nói cậu ấy 'đang ăn tối' ";
// $str = 'Hôm nay tôi đi hc';
// var_dump(implode (' ', array(
//     'Xin',
//     'Chào',

// )));
// $sinhvien = array(
//     0 => 'Nguyễn Văn A',
//     2 => 'Nguyễn Văn B'
//     );
//     // print_r($sinhvien);
//     echo $sinhvien[2];
// $taphop = array(
//     1 => '22',
//     2 => '33',
//     3 => '13',
// );
// echo $taphop[3];

// $a = 12;
// $b = 13;
// $c = $a + $b;

// $d = ($a == $b)  || ($c == 25);

// $d = ($a == $b);
// var_dump(!$d);
// "<br>";
// var_dump(!$d);

//// if & else 
// $a = 40;
// $b = 30;

// if ($a > $b && $a < 50) {
//     echo 'a lớn hơn b, nhỏ hơn 50' . "<br/>";
//     if ($a == $b) {
//         echo 'và a bằng b';
//     }
//     else{
//         echo 'và a khác b';
//     }
// }
// else{
//     echo 'a nhỏ hơn b';
// }
//// if & elseif & else

// $a = 22;
// $b = 33;
// $c = 44;
// if ($a > $b && $a < $c) {
//     echo ' a lớn hơn b và nhỏ hơn c';
// }
// elseif ($a < $b && $a < $c) {
//     echo 'a nhỏ hơn b và nhỏ hơn c';
// }
// elseif ($a < $b && $a > $c) {
//     echo 'a nhỏ hơn b và lớn hơn c';
// }
// else{
//     echo 'còn lại';
// }

///// switch & case

// $a = 'Hoa Hồng';

// switch ($a) {
//     case 'Hoa Mai':
//         echo 'a là Hoa Mai';
//         break;
//     case 'Hoa Lan':
//         echo 'a là Hoa Lan';
//         break;
//     // case 'Hoa Hồng':
//     //     echo 'a là Hoa Hồng';
//     //     break;    
//     default:
//         echo 'a là Hoa Khác';
//         break;
// }

// $a = 20;
// $b = 'null';
// switch ($a) {
//     case '20':
//         $b = $a % 2;
//         switch ($b) {
//             case '0':
//                 echo 'b là số chẵn';
//                 break;
            
//             default:
//                 echo 'b là số lẻ';
//                 break;
//         }
//         break;
    
//     default:
//         echo 'a là số khác';
//         break;
// }


// $array = [3,4,35,7,444,43,32];
// $max = $array[0];

// for ($i = 0; $i <= 6; $i++) { 
//     if ($array[$i] > $max) {
//         $max = $array[$i];
//     }
// }
// echo $max;

// for ($i = 1; $i < 10; $i++)
// {
//     for ($j = 9; $j >= $i; $j--)
//     {
//         echo $j;
//     }
// echo '<br/>';;
// }



// xắp sếp thứ tự mảng tăng dần1

// $ar1 = [1,5,6,3,9,7];
// for ($i=0; $i < count($ar1); $i++) { 
//     for ($j=0; $j < count($ar1)-1; $j++) { 
//         if( $ar1[$j] > $ar1[$j+1]) {
//             $ar2 = $ar1[$j+1];
//             $ar1[$j+1] = $ar1[$j];
//             $ar1[$j] = $ar2;   
//         }
//     }
// }
// print_r($ar1);
// $list = array('5','15','7','12','39','1','5');
// $a;
// $b;
// for($i=0;$i<count($list);$i++){ 
//     for($j=0;$j<count($list);$j++){
//         if($list[$i] < $list[$j]){
//             $a = $list[$j]; 
//             $b = $list[$i];     

//             $list[$i] = $a;
//             $list[$j] = $b;
//         }
//     }
// }
// echo "<pre>";
// print_r($list);

// $arr= [1,2,7,5,4]; //1,2,5,7,4 ; 1,2,5,4,7 ; 1,2,4,5,7;

// for($i=0; $i<count($arr); $i++)  //
// {
//     for($j=0; $j<count($arr)-1; $j++)  //j=0>4 ; j=1>4 ; j=2>4 ; j=3>4
//     {
//         if($arr[$j] > $arr[$j+1]){ echo (string) $arr[$j] . '>' . $arr[$j+1] . 'đúng' . '<br/>';  // nếu 1 > 2, nếu 2>7 ,nếu 7/5, || nếu 5>4,
//             echo "đổi vị trí thành : ";
//             $temp = $arr[$j+1];  // biến tạm = vị trí $arr[$j+1] = 5 || biến tạm  
//             $arr[$j+1] = $arr[$j]; // 5 = vị trí $arr[$j] = 7 ||
//             $arr[$j] = $temp;  // 7 = vị trí $temp = 5 ||
//             echo implode(',' , $arr). '<br/>';
//         }
//     }

// }

// xắp sếp thứ tự mảng giảm dần

// $arr = [3,5,4,2,7,1];
// for ($i=0; $i < count($arr); $i++) { 
//     for ($i=0; $i < count(); $i++) { 
//         # code...
//     }
// }
// $i = 0;
// while ($i < 100) {
//     if($i % 3 == 0 && !($i  % 5 == 0)){
//         echo "$i chia het cho 3:" . "<br>";
//     }
//     $i++;
// $i = 0;
// $j = 10;
// while ($i < 100 && $j > 5){
//     $i++;
//     $j -= 2;
// };
// echo $i . "<br>";
// echo $j;


// hàm trong php
// function demSo($nhapvao)
// {
//     if ($nhapvao % 2 == 0) {
//         echo "$nhapvao :la so chan <br>";
//     }
//     else{
//         echo "$nhapvao :la so le <br>";
//     }
// };
// demSo(25);
// demSo(33);
// demSo(22);


// $a = 11;
// if (kiemTraSoTran($a)) {
//     echo 'so chan';
// }else{
//     echo 'so le';
// }
// function kiemTraSoTran($a){
//     if($a % 2 == 0){
//         return true;
//     }
//     else{
//         return false;
//     }
// }

// function tinhTong($a,$b,$c){
//     $tong = $a + $b + $c;
//     return $tong;
// }
// $tong = tinhTong(12,13,15);
// echo $tong;

// $cars = array("BMV","Mes","Lexus");

// switch ($cars[2]) {
//     case 'BMV':
//         echo "ở đây có bán BMV";
//         break;
//     case 'Mes':
//         echo "ở đây có bán Mes";
//         break;
//     case 'Lexus':
//         echo "ở đây có bán Lexus";
//         break;
//     default:
//         echo "không bán loại này";
//         break;
// }