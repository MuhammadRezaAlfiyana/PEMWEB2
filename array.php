<?php

$animals = ["k"=>"kucing", "a"=> "ayam", "b"=>"banteng", "i"=>"ikan"];
echo 'Ini hewan dengan index ke 1 : ' .$animals["k"];
echo "<br>";
echo 'Ini hewan dengan index ke 3 : ' .$animals["i"];
echo '<br>';
// mencetak seluruh data array gunakan looping foreach 
foreach ($animals as $animal) {
    echo '<li>'.$animal.'</li>';
}