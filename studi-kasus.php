<?php 

class Gadget {
    public $nama;
    private $spek;
    protected $harga;

    public function __construct($nama, $spek, $harga) {
        $this->nama = $nama;
        $this->spek = $spek;
        $this->harga = $harga;
    }

    public function setNama($nama) {
        $this->nama = $nama;
    }
    public function setSpek($spek) {
        $this->spek = $spek;
    }
    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getNama() {
        return $this->nama;
    }
    public function getSpek() {
        return $this->spek;
    }
    public function getHarga() {
        return $this->harga;
    }


}

$produk1 = new Gadget("Laptop Rog", "RTX 3090", 30000000);
echo "Nama Produk: " . $produk1->getNama() . "<br>";
echo "Spesifikasi: " . $produk1->getSpek() . "<br>";
echo "Harga: IDR." . $produk1->getHarga() . "<br>";

echo "<hr>";

$produk2 = new Gadget("Hp POCO Xiaomi", "Snapdragon", 5000000);
echo "Nama Produk: " . $produk2->getNama() . "<br>";
echo "Spesifikasi: " . $produk2->getSpek() . "<br>";
echo "Harga: IDR." . $produk2->getHarga() . "<br>";