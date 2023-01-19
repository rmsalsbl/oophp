<?php 

// 1. menggunakan scalar type
// declare(strict_types=1);
// function setNumber(int $num){
//     echo $num;
// }

// setNumber(1);

// 2. return type
// function getNumber() : int{
//     return 4;
// }
// echo getNumber();

// 3. menggunakan array
function getNumber() : array{
    return [1, 2, 3];
}

print_r(getNumber());

?>