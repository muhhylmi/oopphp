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
}

/**
 * 
 */
class CetakInfoProduk {
	public function cetak(Produk $produk){
		$str = "{$produk->getLabel()} Rp. {$produk->harga}";
		return $str;
	}
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Sonen", 240);

$produk2 = new Produk("PUBG", "Tensent Games", "Tencent Games", 500);
$produk3 = new Produk();
$CetakInfoProduk = new CetakInfoProduk();

echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<br>";
echo "Cetak produk : ".$CetakInfoProduk->cetak($produk1);
