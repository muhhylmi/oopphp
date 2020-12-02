<!-- define tidak bisa disimpan di class
constant bisa disimpan di class
 -->
<?php  

define('NAMA', 'Hylmi');
CONST NAME = 'Hylmi2';

echo NAMA;
echo "<br>";
echo NAME;


class Coba{
	CONST NAME = 'Hylmi2';
}

echo "<hr>";

echo "<h1>Coba di Class</h1>";
echo Coba::NAME;

echo "<hr>";
echo "<h1>Magic Constant</h1>";
// isinya constant isinya tetap pada php
// menampilkan lokasi file
echo __FILE__;
echo "<br>";
// menampilkan baris sekarang
echo __LINE__;
// dll
