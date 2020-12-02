<?php  

/**
 * 
 */
class ContohStatic{
	public static $angka = 1;
	
	public static function halo(){
		return "halo". self::$angka++ ." kali";
	}
}

class contohStatic2{
	public static $angka = 1;
	public function halo(){
		return "halo". self::$angka++ ." kali";
	}
}

echo ContohStatic::$angka;
echo "<br>";
echo ContohStatic::halo();

echo "<hr>"; 	
echo "<h1>Gabungan Static Dan Non Static</h1>";
$obj = new contohStatic2;
echo $obj->halo()."<br>";
echo $obj->halo()."<br>";
echo $obj->halo()."<br>";

echo "<hr>";
$obj2 = new contohStatic2;
echo $obj2->halo()."<br>";
echo $obj2->halo()."<br>";
echo $obj2->halo()."<br>";
