<?php 


class Produk
{
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$jmlMain;

	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $jmlMain=0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit =$penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->jmlMain = $jmlMain;
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
	public function getInfoKomik(){
		$str = "Komik : {$this->getInfoProduk()} - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk{
	public function getInfoGame(){
		$str = "Game : {$this->getInfoProduk()} - {$this->jmlMain} Jam.";
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


echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();
