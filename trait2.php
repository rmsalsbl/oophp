<?php 

trait cuaca{
    public function ca1(){
        return "Cuaca hari ini Cerah!";
    }
}

trait suhu{
    public function sh1(){
        return "Suhu hari ini 36 derajat celcius!";
    }
}

class weaForecast{
    use cuaca;
}

class infoSuhu{
    use suhu;
}

$berita = new weaForecast;
echo $berita->ca1();
echo "<br>";
$berita2 = new infoSuhu;
echo $berita2->sh1();
?>