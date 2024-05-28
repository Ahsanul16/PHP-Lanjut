<?php
// Array dengan nama dan umur
$data = array(
    array("nama" => "pradaviksen", "umur" => 15),
    array("nama" => "nopalblug", "umur" => 60),
    array("nama" => "rendigotot", "umur" => 35),
    array("nama" => "titoae", "umur" => 20),
    array("nama" => "amroslayer", "umur" => 28),
    array("nama" => "rizal", "umur" => 32),
    array("nama" => "dimasukin", "umur" => 27),
    array("nama" => "fahruldecul", "umur" => 22),
    array("nama" => "anggersimbatan", "umur" => 40),
    array("nama" => "alfindo", "umur" => 26),
    array("nama" => "suminem", "umur" => 29),
    array("nama" => "dion", "umur" => 33),
    array("nama" => "hikmal", "umur" => 24),
    array("nama" => "rangga", "umur" => 31),
    array("nama" => "irsyat", "umur" => 37)
);

// Konversi array menjadi JSON
$json_data = json_encode($data, JSON_PRETTY_PRINT);

// Tampilkan JSON
echo $json_data;