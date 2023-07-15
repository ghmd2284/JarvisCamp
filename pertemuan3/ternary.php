<?php 
$hari = 'sabtu';
// $mood = ($hari == 'sabtu')? 'full senyum' : 'engga full senyum';

$mood = ($hari == 'sabtu' || $hari = 'minggu')? 'full senyum' : 'engga full senyum';

echo 'Hari Ini Saya ' . $mood;
?>