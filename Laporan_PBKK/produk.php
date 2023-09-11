<?php
// Membuat kelas Laptop
class Laptop {
    // Membuat atribut-atribut
    public $merk; // Atribut untuk menyimpan merk laptop
    public $cpu;  // Atribut untuk menyimpan jenis CPU laptop
    public $ram;  // Atribut untuk menyimpan ukuran RAM laptop
    public $harga; // Atribut untuk menyimpan harga laptop

    // Konstruktor untuk menginisialisasi objek Laptop dengan merk, CPU, RAM, dan harga
    public function __construct($merk, $cpu, $ram, $harga) {
        $this->merk = $merk;
        $this->cpu = $cpu;
        $this->ram = $ram;
        $this->harga = $harga;
    }

    // Metode get_label untuk mengembalikan label informasi laptop
    public function get_label() {
        return "$this->merk, $this->cpu, $this->ram, Rp. {$this->harga}";
    }
}

// Membuat objek-objek dari kelas Laptop
$laptop1 = new Laptop("Asus ROG", "Intel Core i9 Gen 13", "32 GB DDR5", 50000000);
$laptop2 = new Laptop("Advan", "Intel Celeron 240", "4 GB DDR2", 2400000);

// Menampilkan informasi tentang laptop1
echo "Laptop : " . $laptop1->get_label();
echo "<br>";

// Menampilkan informasi tentang laptop2
echo "Laptop : " . $laptop2->get_label();
?>
