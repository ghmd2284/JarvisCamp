<?php 
class Laptop {
    public $merk;
    public $processor;
    public $memori;

    public function __construct($merk, $processor, $memori){
        $this->merk = $merk;
        $this->memori = $memori;
        $this->processor = $processor;
    }
    public function desc(){
        return "Merk Laptop Ini Adalah $this->merk, 
        Dengan Processor $this->processor 
        Dan RAM $this->memori";
    }
}

$laptop = new Laptop("HP Pavilion", "Ryzen 5", "16GB");
echo $laptop->desc();