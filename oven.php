<?php
class Oven {
    // Properti
    public $merk = "kosong";
    public $ukuran = "kosong";
    public $warna = "kosong";

    // Method
    private function getOven($merk, $ukuran, $warna) {
        echo "Oven ini adalah milik: " . $merk . "<br>";
        echo "Ukurannya adalah: " . $ukuran . "<br>";
        echo "Warnanya adalah: " . $warna . "<br>";
    }

    public function getDetail() {
        $this->getOven("Mito", "42 inch", "Hitam");
    }
}

// Objek oven 1
$oven1 = new Oven();
$oven1->merk = "LG";
$oven1->ukuran = "60 inch";
$oven1->warna = "Hitam";
var_dump($oven1);
echo "<br><br><hr>";

// Objek oven 2
$oven2 = new Oven();
$oven2->getDetail();
echo "<br><br>";
var_dump($oven2);
?>