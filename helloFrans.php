<?php
echo "Hello World\n";
$umur = 40;
var_dump($umur);
$panjang = 40.0;
var_dump($panjang);
$overflow = 9223372036854775807;
var_dump($overflow);
$overflow = 92233720368547758071;
var_dump($overflow);
$rootBear = "A & W\n\n\n\\";
var_dump($rootBear);

$rootBear = 'A & W\n\n\n\\';
var_dump($rootBear);

$namaMurid = array("Dhafin", "Anto", "Ari");
var_dump($namaMurid);

$namaMurid = array("Bio" => "Dhafin", "Fis" => "Anto", "Mat" =>"Ari");
var_dump($namaMurid);
var_dump($namaMurid['Bio']);

$a = 1;
$b = 2;
$b+=$a;
var_dump($b);
$c = $a / $b + 1;
var_dump($c);

$x = 10;
$y = '10';
var_dump($x == $y);
var_dump($x === $y);
$x++;
var_dump($x );
$x--;
var_dump($x );
var_dump(--$x );
var_dump(++$x );

$goodLooking = true;
$kaya = true;
$dapatPasangan = $goodLooking and $kaya;
var_dump($dapatPasangan);

$dapatPasangan = $goodLooking && $kaya;
var_dump($dapatPasangan);

$kaya = false;
$dapatPasangan = $goodLooking or $kaya;
var_dump($dapatPasangan);

$dapatPasangan = $goodLooking || $kaya;
var_dump($dapatPasangan);

$nama = "ari";
$nama .= "Untung";
var_dump($nama);

$arr1 = array("A","B");
$arr2 = array(2 => "B","C","D");
$arr3 = $arr1 + $arr2;
var_dump($arr1);
var_dump($arr2);
var_dump($arr3);

function luas($tipe, $a, $b) {
    if ($tipe == "Persegi") {
        return $a * $b;
    }elseif($tipe == "Persegi Panjang"){
        return $a * $b;
    }elseif($tipe == "Segitiga"){
        return 0.5 * $a * $b;
    }
}

echo "\nLuas Persegi : " . luas("Persegi", 10,20); 
echo "\nLuas Persegi Panjang : " . luas("Persegi Panjang", 10,20); 
echo "\nLuas Segitiga : " . luas("Segitiga", 10,20); 

var_dump($namaMurid);
sort($namaMurid);
var_dump($namaMurid);


class user{
    private $first_name ;
    private $last_name;

    
    function __construct($first_name = "", $last_name = "")
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    

    /**
     * Get the value of last_name
     */ 
    public function getLast_name()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLast_name($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

    /**
     * Get the value of first_name
     */ 
    public function getFirst_name()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirst_name($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }
}

$user = new User();
$user->setFirst_name("test");
$user->setLast_name("tset");
var_dump($user);

$buat = new User("Ari","Untung");
var_dump($buat);
