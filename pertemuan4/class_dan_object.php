<?php 

// class Mobil {
//     public $merek;
//     public $warna;

//     public function hidupkanMesin() {
//         echo "Mesin Mobil dihidupkan";
//     }
//     public function jalan() {
//         echo "Mobil Berjalan";
//     }
// }

// $toyota = new Mobil();
// $toyota->merek = "toyota";
// $toyota->warna = "hitam";

// $toyota->hidupkanMesin();
// echo "</br><br>";
// $toyota->jalan();

// $honda = new Mobil();
// $honda->merek = "honda";
// $honda->warna = "silver";


class Mobil {
    private $merk;
    private $warna;

    // function setter 
    public function setMerk($merk) {
        $this->merk = $merk;
    }

    // function getter 
    public function getMerk() {
        echo $this->merk;
    }
    
    // function setter 
    public function setwarna($warna) {
        $this->warna = $warna;
    }
    // function getter 
    public function getwarna() {
        echo $this->warna;
    }

    public function hidupkanMesin() {
        echo "Mesin Mobil dihidupkan";
    }
    public function jalan() {
        echo "Mobil Berjalan";
    }
}

$toyota = new Mobil();
$toyota->setMerk("Toyota");
$toyota->setWarna("Hitam");
$toyota->getMerk();
echo "</br><br>";
$toyota->getWarna();
echo "</br><br>";
$toyota->hidupkanMesin();
echo "</br><br>";
$toyota->jalan();
?>