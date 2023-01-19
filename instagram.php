<?php

class Instagram{

    public $namauser = "namauser";
    public $pengikut = "pengikut";
    public $diikuti = "diikuti";
    public $postingan = "postingan";

    public function likePostingan() {

    }

    public function Mengikuti() {
        
    }

    public function Komentar() {
        
    }

    public function notifikasi() {
        return "bagusZuxxy menyukai postingan anda";
    }

    public function getLabel() {
        return "$this->namauser $this->pengikut " ;
    }
}

$akun_wanda = new Instagram();
$akun_wanda->namauser = "wandakh <br>";
$akun_wanda->pengikut = "2.3k <br>";
$akun_wanda->diikuti = "0";
$akun_wanda->postingan = "1000";

echo $akun_wanda->getLabel();
echo $akun_wanda->notifikasi();


?>