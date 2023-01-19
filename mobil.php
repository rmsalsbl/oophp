<?php 

class Mobil{

    public $nama = "nama";
    public $merk = "merk";
    public $warna = "warna";
    public $tipeMesin = "tipeMesin";
    public $kecepatanMaksimal = 0;

    public function tambahKecepatan() {

    }

    public function kurangiKecepatan() {
        
    }

    public function belokKiri() {
        
    }

    public function belokKanan() {
        
    }

    public function sayHello() {
        return "Hello Salsa";
    }

    public function getLabel() {
        return "$this->nama, $this->merk";
    }
    
}
$mobil_salsa = new Mobil();
$mobil_salsa->nama = "Lamborghini Aventador";
$mobil_salsa->merk = "Lamborghini";
$mobil_salsa->warna = "Abu";
$mobil_salsa->tipeMesin = "V12";
$mobil_salsa->kecepatanMaksimal = "2000";

// echo "Mobil Salsa :". $mobil_salsa ->nama, $mobil_salsa ->merk;
// var_dump($mobil_salsa);

echo $mobil_salsa->sayHello();
echo $mobil_salsa->getLabel();

$mobil_rimasei = new Mobil();



?>