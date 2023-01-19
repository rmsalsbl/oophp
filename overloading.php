<?php 

class Shape{
    function __call($name_func, $arguments)
    {
       //mencocokan nama fungsi
       if($name_func == 'area'){
        switch (count($arguments)){
            //membuat lingkaran
            case 1 : return 3.14 * $arguments[0];
            //membuat persegi
            case 2 : return $arguments[0] * $arguments[1];
        }
       } 
    }
}

//inisiasi objek class shape
$shape = new Shape;
//memanggil lingkaran
echo ($shape->area(2));
echo "\n";
//memanggil persegi
echo ($shape->area(4, 2));

?>