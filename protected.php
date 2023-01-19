<?php

class Mobile2 {
    protected $namamerk = "Legend";
    protected function hellomobile(){
        return " dari kelas mobile";
    }
}

//membuat warisan 
class Mobile extends Mobile2{
    public function getmobile(){
    return $this->hellomobile() . "" . $this->namamerk;
    }
}

$mobile2 = new Mobile();
echo $mobile2->getmobile();

?>