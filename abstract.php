<?php 

//keyword penggunaan abstrak class menggunakan abstrak diawal

abstract class Mobil{
    public $setharga;

    //abstact class
    abstract function spec();

    //bukan abstract class
    public function setHarga($setharga){
        $this->setHarga($setharga);
    }

}

class Pajero extends Mobil{
    function spec(){
        $nama = "Nama Mobil : Pajero";
        $kapasitas = "Kapasitas 7 Orang";

        //membuat output
        echo $nama;
        echo "\n";
        echo $kapasitas;
    }
}

//menginisiasi objek pada kelas turunannya
$pajero = new Pajero();
$pajero->spec();


?>
