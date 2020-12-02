<?php  
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