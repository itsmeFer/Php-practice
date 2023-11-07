<?php
// buat class mobil
class Mobil {

    // buat property untuk class mobil
    public $nama_pemilik="budi";
    public $merk_mobil;

    // buat metho untuk class mobil
    public function hidupkan_mobil(){
        return "hidupkan mobil $pemilik";
    }
}

// buat object dr klas mobil
$mobil_baru = new mobil();

echo $mobil_baru->hidupkan_mobil();
?>
