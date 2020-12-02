<!-- public = dapat digunakan dimana saja, diluar keas
protected = dapat digunakan dikelas parent dan turunannya
private = hanya dapat digunakan untuk kelas tertentu saja -->

<?php 

interface InfoProduk{
	public function getInfoProduk();
}

abstract class Produk{

	abstract public function getInfo();
	protected $judul,
			$penulis,
			$penerbit;
	protected $harga, $diskon;



	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit =$penerbit;
		$this->harga = $harga;
	}

	public function setJudul( $judul){
		$this->judul = $judul;
	}

	public function getJudul(){
		return $this->judul;
	}

	public function setPenulis( $penulis){
		$this->penulis = $penulis;
	}
	public function getPenulis(){
		return $this->penulis;
	}

	public function setPenerbit( $penerbit){
		$this->penerbit = $penerbit;
	}

	public function getPenerbit(){
		return $this->penerbit;
	}

	public function setDiskon($diskon){
		$this->diskon = $diskon;
	}

	public function getDiskon(){
		return $this->diskon;
	}

	public function setHarga( $harga){
		$this->harga = $harga;
	}

	public function getHarga(){
		$harga = $this->harga - ($this->harga * $this->diskon /100);
		return $harga;
	}

	public function getLabel()
	{
		return "$this->judul, $this->penulis, $this->penerbit";
	}

}

/**
 * 
 */
class Komik extends Produk implements InfoProduk{
	public $jmlHalaman;
	function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlHalaman = $jmlHalaman;
	}


	public function getInfo(){
		$str = "{$this->getLabel()}, ($ {$this->harga})";
		return $str;
	}

	public function getInfoProduk(){
		$str = "Komik : ".$this->getInfo()." - {$this->jmlHalaman} Halaman.";
		return $str;
	}
}

class Game extends Produk implements InfoProduk{
	public $jmlMain;

	function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlMain=0){
		parent::__construct($judul, $penulis, $penerbit, $harga);
		$this->jmlMain = $jmlMain;
	}

	public function getInfo(){
		$str = "{$this->getLabel()}, ($ {$this->harga})";
		return $str;
	}

	public function getInfoProduk(){
		$str = "Game :". $this->getInfo()." - {$this->jmlMain} Jam.";
		return $str;
	}

}

/**
 * 
 */
class CetakInfoProduk {
	public $daftarProduk = [];

	public function tambahProduk(Produk $produk){
		$this->daftarProduk[] = $produk; 
	}

	public function cetak(){
		$str = "Daftar Produk : <br>";
		foreach ($this->daftarProduk as $p) {
			$str .= "-. {$p->getInfoProduk()} <br>";
		}
		return $str;
	}
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Sonen", 24, 50);
$produk2 = new Game("PUBG", "Tensent Games", "Tencent Games", 500, 40);
$cetakProduk = new CetakInfoProduk();

$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();


