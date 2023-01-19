<?php 

class Siswi {
    function biodata(){
        echo "Salsabila Rimasei";
    }

    function ttl(){
        echo "Lahir di Jakarta, 10 Mar 2006 \n";
    }
}

//child class
//isinya funcnya disesuaikan dengan kebutuhan

class Mahasiswi extends Siswi{
    function ttl(){
        echo "Selamat anda LOLOS di UI";
    }
}

$siswi = new Siswi;
$siswi->biodata();
$siswi->ttl();
$siswi2 = new Mahasiswi;
$siswi2->ttl();

?>