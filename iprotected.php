<?php 

class Instagram2{
    protected $namauser =  "maetamong";
    protected function notifikasi() {
        return "bagusZuxxy menyukai postingan anda";
    }
}

class Instagram extends Instagram2{
    public function getinstagram(){
    return $this->notifikasi() . "" . $this->namauser;
    }
}

$instagram2 = new Instagram();
echo $instagram2->getinstagram();

?>