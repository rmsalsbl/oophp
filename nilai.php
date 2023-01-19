<?php 

class Nilai{
    public $angka = 1;

    public function halo(){
        return "'Halo " . $this->angka++ . "Kali <br>";
    }
}

$obj = new Nilai();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<br>";

$obj2 = new Nilai();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();

?>