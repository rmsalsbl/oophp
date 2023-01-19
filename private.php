<?php 

class Mobile{
    private $namamerek;
    private function hello(){
        return "dari kelas mobile";
    }
    //method untuk mengisi properti yang diprivat
    public function setnamamerk($namamerek){
        $this->$namamerek = $namamerek;
    }
    public function getPrivate(){
        return $this->namamerek . "" . $this->hello();
    }
}

$mobile = new Mobile();
$mobile->setnamamerk("Bangbang");
echo $mobile->getPrivate();
?>