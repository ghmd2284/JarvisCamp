<?php

class Kendaraan {
    public $merk;
    public $warna;
    
    public function __construct($merk, $warna) {
        $this->merk = $merk;
        $this->warna = $warna;
    }
    
    public function getInfo() {
        return "Kendaraan ini adalah {$this->merk} dengan warna {$this->warna}.";
    }
}

class Mobil extends Kendaraan {
    public $tahun;
    
    public function __construct($merk, $warna, $tahun) {
        parent::__construct($merk, $warna);
        $this->tahun = $tahun;
    }
    
    public function getInfoMobil() {
        return $this->getInfo() . " Tahun produksi: {$this->tahun}.";
    }
}

// Membuat objek berdasarkan class Mobil
$mobil = new Mobil("Toyota", "Hitam", 2022);

echo $mobil->getInfoMobil();

?>
