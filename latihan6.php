<?php
    // buat class mobil
    class mobil{

        //buat property untuk class mboil
        public $nama_pemilik="Budi";

        // buat method untuk class mobil
        public function hidupkan_mobil(){
            return "Hidupkan mobil $this->nama_pemilik";
        }
    }
    // buat object dr class mobil
    $mobil_baru = new mobil();

    //hidupkan mobil budi
    echo $mobil_baru->hidupkan_mobil();
    echo "<br>";

    // ubah isi property $nama_pemilik pada objeck mobil baru
    $mobil_baru->nama_pemilik="Angga";

    // hidupkan mobil angga
    echo $mobil_baru ->hidupkan_mobil(); 
    echo "<br>";

    // buat objek baru dr class mobil dan panggil hidupkan_mobil()
    $mobil_lama = new mobil();
    echo $mobil_lama->hidupkan_mobil();
    ?>
