<?php
require 'app/init.php';
// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Sonen", 24, 50);
// $produk2 = new Game("PUBG", "Tensent Games", "Tencent Games", 500, 40);
// $cetakProduk = new CetakInfoProduk();

// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);
// echo $cetakProduk->cetak();	


// $obj = new App\Service\User();
// echo "<br>";
// new App\produk\User();




//menggunakan alias untuk namespace
use App\Service\User as ServiceUser;
use App\produk\User as ProdukUser;


new ServiceUser();
echo "<br>";
new ProdukUser();