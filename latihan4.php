<?php

// buat class
class kendaraan {
    // protect property
    private $tipe_mobil="Sedan";

    public function tampilkan_tipe(){
        return $this->tipe_mobil;
    }
}


// buat class mobil
class mobil extends kendaraan{
    
    public function tampilkan_tipe(){
        return $this->tipe_mobil;
    }
}

// buat object dr klas mobil
$kendaraan_baru =  new kendaraan();
$mobil_baru = new mobil();

// jalankan metod dr klas komputer
echo $kendaraan_baru->tampilkan_tipe();

// jalankan metod dr klas mobil(error)
echo $mobil_baru->tampilkan_tipe();
?>