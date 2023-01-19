<?php


include ('Negara/indonesia.php');
class Indonesia{
    public $test;
    public function __construct()
    {
        $this->test = new \OOPHP\Negara\Indonesia();
        echo "ibukota : ". $this->test->ibukota("Jakarta");
        echo "bahasa : ". $this->test->bahasa("Indonesia");
    }
}

$jalan = new Indonesia();

?>