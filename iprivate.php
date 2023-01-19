<?php


class Instagram{

    private $namauser;
    private function notifikasi() {
        return "bagusZuxxy menyukai postingan anda";
    }

    //method untuk mengisi properti yang diprivat
    public function setnamauser($namauser){
        $this->$namauser = $namauser;
    }
    public function getPrivate(){
        return $this->namauser . "" . $this->notifikasi();
    }

    
}

$instagram = new Instagram();
$instagram->setnamauser("maetamong");
echo $instagram->getPrivate();

?>