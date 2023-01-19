<?php 
namespace OOPHP\Negara;

class Indonesia{
    public $ibukota;
    public $bahasa;

    public function test($ibukota){
        $this->ibukota=$ibukota;
        return $this->ibukota;
    }
    public function test2($bahasa){
        $this->bahasa=$bahasa;
        return $this->bahasa;
    }
}

?>