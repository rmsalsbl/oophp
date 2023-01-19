<?php

class Twitter{

    public $namauser = "namauser";

    public function notifikasi() {
        return "rosearerosie menyukai postingan anda";
    }
}

$akun_mae = new Twitter();
$akun_mae->namauser = "maetamong <br>";

echo $akun_mae->notifikasi();


?>