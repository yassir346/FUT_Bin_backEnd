<?php

$arr = array(1,2,3,4,5);

echo('array : ');

print_r($arr);


$arr = array();

$arr[0] = 5;
$arr[1] = 6;

printf("array : ");
print_r($arr);


//array indexé
$input = input("nom", "prenom", "email");



class personne{
    public $nom;
    public $prenom;
    public $email;
    public function __construct($nom, $prenom, $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->email = $email;
    }
}

$Individu = new personne("yassir", "YASSIR", "");

foreach($Individu as $x => $y){
    echo "$x: $y<br>";
}

//array associative

$arr = array(
    "nom" => "yassir",
    "prenom" => "YASSIR",
    "email" => "mr@g.co"
);

foreach($input as $x){
    echo "$x <br>";
}

foreach($arr as $x => $y){
    echo "$x : $y <br>";
}













?>

