<?php
class User{
    public $first_name;
    public $last_name;
    public $nilai;

    public function __construct($iFirst, $iLast){
        $this->first_name = $iFirst;
        $this->last_name = $iLast;
    }

    public function __toString(){
        return "User = $this->first_name $this->last_name";
    }

    public function set_nilai($iNilai){
        $this->nilai = $iNilai;
    }

    public function get_name(){
        return $this->first_name;
        // return $this->first_name . " " . $this->last_name;
    }

    public function get_nilai(){
        return $this->nilai;
    }
}
?>
<?php
$user1 = new User('Arvyn', 'Wijaya');
$user2 = new User('Gary', 'Prayudi');

$arr1 = array($user1,$user2);
// echo "$arr1[0]\n";
// echo "$arr1[1]\n";

// echo $user1->get_name() . "\n";
// $user1->set_nilai(1);
// echo $user1->get_nilai() . "\n";

foreach ($arr1 as $arr1_value) {
    // echo $arr1_value . "\n";
    echo $arr1_value->get_name() . "\n";
    echo $arr1_value->last_name . "\n";
    echo $arr1_value->set_nilai(rand(1,5));
    echo $arr1_value->get_nilai() . "\n";
}

?>