<?php 

class Langit{
    public $nama;

    public $cahaya;

    public function __construct($nama, $cahaya)
    {
        $this->nama = $nama;
        $this->cahaya = $cahaya;
    }

    public function namaBintang(){
        echo "Nama bintang : {$this->nama} dan warnanya {$this->cahaya}";
    }
}

//membuat kelas pewarisan
//keyword inheritance/pewarisan adalah exteds

class Bintang extends Langit{
    public function pesan(){
        echo "Benda - benda Langit ";
    }
}

//inisiasi objek
$bintang = new Bintang("Canopus, Capella, Vega", "terang");
$bintang->pesan();
$bintang->namaBintang();

?>