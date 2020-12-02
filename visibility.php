<!-- public = dapat digunakan dimana saja, diluar keas
protected = dapat digunakan dikelas parent dan turunannya
private = hanya dapat digunakan untuk kelas tertentu saja -->

<?php 


class Produk
{
	public $judul,
			$penulis,
			$penerbit;
	private	$harga;
	protected $diskon;

	public function getHarga(){
		$harga = $this->harga - ($this->harga * $this->diskon /100);
		return $harga;
	}

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

	public function setDiskon($diskon){
		$this->diskon = $diskon;
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

echo "<hr>";
$produk2->setDiskon(10);
echo $produk2->getHarga();