<?php

class mobil {
    // public
    public $pemilik;
    // public method
    public function nyalakan_mobil(){
        return "Nyalakan mesin mobil";
    }
}

// buat object dari class mobil
$mobil_Budi = new mobil();

// buat properti
$mobil_Budi ->pemilik='Budi';

// tampilkan pro[erti]
echo $mobil_Budi->pemilik;

// spasi
echo "<br>";

// tampilkan metho
echo $mobil_Budi->nyalakan_mobil();
?>