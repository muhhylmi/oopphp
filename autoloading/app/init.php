<?php  
// require 'produk/Produk.php';
// require 'produk/InfoProduk.php';
// require 'produk/Komik.php';
// require 'produk/Game.php';
// require 'produk/CetakInfoProduk.php';

spl_autoload_register(function($class){
	require 'produk/'. $class. '.php';
});