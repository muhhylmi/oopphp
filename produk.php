<?php 


class Produk
{
	public $judul = "judul",
			$penulis = "penulis",
			$penerbit = "penerbit",
			$harga = 0;

	public function getLabel()
	{
		return "$this->judul, $this->penulis, $this->penerbit";
	}
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Sonen";

$produk2 = new Produk();
$produk2->judul = "PUBG";
$produk2->penulis = "Tensent Games";
$produk2->penerbit = "Tencent games";


echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
