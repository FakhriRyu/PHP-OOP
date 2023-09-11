<?php
// Membuat kelas Mahasiswa
class Mahasiswa {
    // Membuat atribut
    public $nama; // Atribut untuk menyimpan nama mahasiswa
    public $NPM;  // Atribut untuk menyimpan NPM mahasiswa
    public $Prodi; // Atribut untuk menyimpan Prodi mahasiswa

    // Konstruktor untuk menginisialisasi objek Mahasiswa dengan nama, NPM, dan Prodi
    public function __construct($nama, $NPM, $Prodi) {
        $this->nama = $nama;
        $this->NPM = $NPM;
        $this->Prodi = $Prodi;
    }

    // Metode getinfo untuk mencetak informasi mahasiswa
    public function getinfo() {
        echo "Nama Lengkap: " . $this->nama . " NPM: " . $this->NPM . " Prodi: " . $this->Prodi;
    }
}

// Membuat objek dari kelas Mahasiswa
$mahasiswa1 = new Mahasiswa("Fakhri Alwan", "G1A021050", "Kedokteran");
$mahasiswa2 = new Mahasiswa("Elisa Alwan", "G1A021008", "Informatika");

// Memanggil metode getinfo untuk objek mahasiswa1
$mahasiswa1->getinfo();
echo "<br>";

// Memanggil metode getinfo untuk objek mahasiswa2
$mahasiswa2->getinfo();
?>
