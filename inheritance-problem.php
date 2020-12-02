<?php 


class Produk
{
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlHalaman,
			$jmlMain,
			$tipe;

	public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0, $jmlHalaman=0, $jmlMain=0, $tipe=""){
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit =$penerbit;
		$this->harga = $harga;
		$this->jmlHalaman = $jmlHalaman;
		$this->jmlMain = $jmlMain;
		$this->tipe = $tipe;
	}

	public function getLabel()
	{
		return "$this->judul, $this->penulis, $this->penerbit";
	}


	public function getInfoLengkap(){
		$str = "{$this->tipe} : {$this->getLabel()},(USD {$this->harga})";
		if ($this->tipe == "Komik") {
			$str .= " - {$this->jmlHalaman}";
		}elseif ($this->tipe == "Game") {
			$str .= " ~ {$this->jmlMain}"; 
		}
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

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Sonen", 24, 50, 0, "Komik");

$produk2 = new Produk("PUBG", "Tensent Games", "Tencent Games", 500, 0, 40, "Game");
$produk3 = new Produk();
$CetakInfoProduk = new CetakInfoProduk();

echo "Komik : ".$produk1->getLabel();
echo "<br>";
echo "Game : ".$produk2->getLabel();
echo "<br>";
echo "Cetak produk : ".$CetakInfoProduk->cetak($produk1);


echo "<br>";
echo "<br>";

echo $produk1->getInfoLengkap();
