<?php 

class Mobile{
    public $namamerek;
    public function hello(){
        return "dari kelas mobile";
    }
}

$mobile = new Mobile();
echo $mobile->namamerek = "mobile legend ";
echo $mobile->hello();
?>