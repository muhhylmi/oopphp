<?php  
// require 'produk/Produk.php';
// require 'produk/InfoProduk.php';
// require 'produk/Komik.php';
// require 'produk/Game.php';
// require 'produk/CetakInfoProduk.php';
// require 'produk/User.php';
// require 'service/User.php';

spl_autoload_register(function($class){
	//memecah string menjadi array berdasarkan pemisah \
	// contoh = App\produk\User menjadi => ["App", "produk", "user"] dan fungsi end() mengambil array paling belakang 
	$class = explode('\\', $class);
	$class = end($class);
	require 'produk/'. $class. '.php';
});

spl_autoload_register(function($class){
	$class = explode('\\', $class);
	$class = end($class);
	require 'Service/'. $class. '.php';
});