<?php

// function Test()
// {
//  static $a = 0;
//  echo $a;
//  $a++;
// }

// Test();
// Test();
// Test();

// tìm số lớn nhất 
// function timMax($a, $b, $c){
//     $max = $a;
//     if( $max < $b){
//         $max = $b;
//     }
//     if ($max < $c){
//         $max = $c;
//     }
//     return $max;
// }
// echo timMax(1,5,3);

// tìm số chia hết cho 3


// $flag = false;
// for ($i=1; $i <= 10 ; $i++) { 
//     if($i % 3 == 0 ){
//         $flag = true;
//     }
// }
// if ($flag == true) {
//     echo $flag . 'co';
// }
// else {
//     echo 'khong';
// }

function soChiaHet($array){
    foreach ($array as $key => $value) {
        if ($value % 3 == 0) {
            echo "những số chia hết cho 3:". $key . "<br/>";
        }
    }
}
$array = array();
for ($i=1; $i <= 20 ; $i++) { 
    $array[$i] = $i;

}
echo "<pre/>";
echo implode(',' , $array);
echo soChiaHet($array);




?>