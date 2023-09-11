<?php
// Mendefinisikan kelas Kucing
class Kucing {
    public $nama; // Atribut untuk menyimpan nama kucing
    public $ras; // Atribut untuk menyimpan ras kucing

    // Konstruktor untuk menginisialisasi objek Kucing dengan nama dan ras
    public function __construct($nama, $ras) {
        $this->nama = $nama;
        $this->ras = $ras;
    }

    // Metode untuk mengembalikan suara kucing
    public function bersuara() {
        return "rawr!";
    }
}

// Membuat dua objek Kucing dengan data yang berbeda
$kucing1 = new Kucing("Miyu", "Persia");
$kucing2 = new Kucing("Puyo", "British");

// Menampilkan informasi tentang kucing pertama
echo $kucing1->nama . " adalah seekor kucing " . $kucing1->ras . ". ";
echo "Dia berkata " . $kucing1->bersuara() . "<br>";

// Menampilkan informasi tentang kucing kedua
echo $kucing2->nama . " adalah seekor kucing " . $kucing2->ras . ". ";
echo "Dia berkata " . $kucing2->bersuara() . "<br>";
