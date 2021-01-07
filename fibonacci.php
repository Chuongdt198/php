<?php 
// function Fibo($n)
// {
//     if ($n <= 2){
//         return 1;
//     }
//     else {
//         return (Fibo($n - 2) + Fibo($n - 1));
//     }
// }
  
// echo Fibo(4);
//

function pheptinh($n)
{
    // Neeus $n < 6 thì trả về chính nó
    if ($n < 6){
        return $n;
    }
    else{
        // Ngược lại tính tổng từ 1 tới $n - 1, và mỗi phần tử lại gọi làm hàm chính nó
        $tong = 0;
        for ($i = 1; $i < $n; $i++){
            $tong += pheptinh($n - $i);
            // echo  $tong . '+=' . pheptinh($n - $i) . "<br/>" ;
        }
        return $tong;
    }
}
  
echo pheptinh(6); 
?>