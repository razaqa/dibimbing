<?php
echo "hello world!\n";
$umur = 40;
var_dump($umur);
$panjang = 40.0;
var_dump($panjang);
$overflow = 9131231231233122431;
var_dump($overflow);
$foo = true;
var_dump($foo);
$rootbeer = 'A & W';
var_dump($rootbeer);
$rootbeer = "A & W \n \n";
var_dump($rootbeer);
$array = array(
"bio" => "a",
"fis" => "b");
var_dump($array);
var_dump($array["bio"]);
$a = 10;
$b = '20';
var_dump($a + $b);
var_dump($a += $b);
var_dump($a == $b);
var_dump($a === $b);
$arr1 = array("A","B");
$arr2 = array("B","C","D","E");
$arr3 = $arr1 + $arr2;
var_dump($arr3);

$panjang = 10;
$lebar = 20;
$luas = $panjang * $lebar;
$persegi = $panjang * $panjang;
echo "luas " . $luas . "\n";
echo "persegi " . $persegi . "\n";


function luas($tipe, $a, $b) {
	$luas = 0;
	if ($tipe == "persegi") {
        $luas = $a * $b;
		echo "luas " . $luas . "\n";
	} 
	elseif ($tipe == "persegi panjang") {
		$luas = $a * $b;
		echo "persegi " . $luas . "\n";		
	}
	elseif ($tipe == "segitiga") {
		$luas = 0.5 * $a * $b;
		echo "segitiga " . $luas . "\n";		
	}
	return $luas;
}
luas ("persegi",10,20);
luas ("persegi panjang",10,20);
luas ("segitiga",10,20);

$a = luas ("persegi",10,20);
$b = luas ("persegi panjang",10,20);
$c = luas ("segitiga",10,20);
$total = $a + $b + $c;
var_dump($total);


?>