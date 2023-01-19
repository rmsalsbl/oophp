<?php 

// function iteration(int $num, int $index = 1){
//     echo "Proses ke-{$index}\n";

    // istilah mencapai akhir untuk di outputkan
    // pada kode ($index < $num)

//     if ($index < $num){
//         iteration($num, $index + 1);
//     }
// }

// iteration(10);

//menggunakan perulangan
function iteration(int $num){
    for ($i = 1; $i <= $num; $i++){
        echo "Perulangan ke={$i}\n";
    }
}
iteration(10);

?>