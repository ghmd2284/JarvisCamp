<?php 
class Hero {
    public $nama;
    public $attack;
    public $hp;
    

    public function __construct($nama,$attack,$hp) 
    {
        $this->nama = $nama;
        $this->attack = $attack;
        $this->hp = $hp;
    }

    public function skill()
    {
        echo "$this->nama Menggunakan Skill";
    }
}

class Mage extends Hero {
    public $mana;
    public $magicAttack;

    public function __construct($nama, $attack, $hp, $mana, $magicAttack)
    {
        parent::__construct($nama,$attack,$hp);
        $this->mana = $mana;
        $this->magicAttack = $magicAttack;
    }

    public function skill()
    {
        echo "$this->nama Menggunakan Magic Skill";
    }
}

$kagura = new Mage("Kagura", 0, 320, 1000, 4000);
$kagura->skill();


?>