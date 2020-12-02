<?php 


class Produk
{
	public $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit =$penerbit;
		$this->harga = $harga;
	}


	public function getLabel()
	{
		return "$this->judul, $this->penulis, $this->penerbit";
	}


	public function getInfoProduk(){
		$str = "{$this->getLabel()}, ($ {$this->harga})";
		return $str;
	}
}

/**
 * 
 */
class Komik extends Produk{
	public $jmlHalaman;
	function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}
	public function getInfoProduk(){
		$str = "Komik : ".parent::getInfoProduk()." - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{
	public $jmlMain;

	function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlMain=0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlMain = $jmlMain;
	}
	public function getInfoProduk(){
		$str = "Game :". parent::getInfoProduk()." - {$this->jmlMain} Jam.";
		return $str;
	}
}

/**
 * 
 */
class CetakInfoProduk {
	public function cetak(Produk $produk){
		$str = "{$produk->getLabel()} ($ {$produk->harga})";
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Sonen", 24, 50);
$produk2 = new Game("PUBG", "Tensent Games", "Tencent Games", 500, 40);
$produk3 = new Produk();
$CetakInfoProduk = new CetakInfoProduk();


echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
