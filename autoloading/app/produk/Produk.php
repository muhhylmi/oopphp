<?php
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