<?php
// Mendefinisikan kelas Kenalan
class Kenalan {
    // Mendefinisikan atribut Nama dan Umur
    public $nama;
    public $umur;

    // Konstruktor untuk menginisialisasi objek Kenalan dengan nama dan umur
    public function __construct($nama, $umur) {
        $this->nama = $nama;
        $this->umur = $umur;
    }

    // Metode sapa untuk mencetak pesan sapaan
    public function sapa() {
        echo "Halo Dunia, nama saya " . $this->nama . " dan umur saya " . $this->umur . " tahun.";
    }
}

// Membuat objek dari kelas Kenalan dengan nama "Fakhri" dan umur 20 tahun
$orang = new Kenalan("Fakhri", 20);

// Memanggil metode sapa untuk objek $orang
$orang->sapa();
?>
