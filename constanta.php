<?php 
//Materi constanta

//Define()
//define('NAMA', 'Salsa');
//echo NAMA;

//Constanta
class Laptop{
    const DOLLAR = 14000;

    
    public function beliLaptop($harga){
        return "Beli laptop baru RP. " . $harga*self::DOLLAR;
    }
}

//akses konstanta lewat objek
$laptop_baru = new Laptop();
echo $laptop_baru->beliLaptop(120);

//class
echo Laptop::DOLLAR;

echo __LINE__;

function coba(){
    return __FUNCTION__;
}

echo coba();

?>