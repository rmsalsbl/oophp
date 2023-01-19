<?php

interface Buah {
    public function makan();
    public function setWarna($warna);
}

interface Benda {
    public function setUkuran($ukuran);
}

class Apel implements Buah, Benda{
    protected $warna;
    protected $ukuran;  //propety

    public function makan(){
        //kunyah
        //sampai bagian tengah
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
    }

    //variable function/method
    public function setUkuran($ukuran){
        $this->ukuran = $ukuran; 
    }
}

?>