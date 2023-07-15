<?php
for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break;
    }
    echo $i . " ";
}

$target = 7;
for ($i = 1; $i <= 20; $i++) {
    if ($i == $target) {
        echo 'ketemu!';
        break;
    }
}

$hewan = ["kucing", "anjing", "kambing", "ayam", "jerapah"];
for ($i = 0; $i < count($hewan); $i++) {
    if ($hewan[$i] == "jerapah") {
        echo 'ketemu jerapah!';
        break;
    }
    echo "bukan jerapah <br/>";
}
