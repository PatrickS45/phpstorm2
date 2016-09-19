<?php

$students = [
    "Emmanuel" => 42,
    "Thierry"  => 51,
    "Pascal"   => 45,
    "Eric"     => 48,
    "Nicolas"  => 19
];

//Calcul Moyenne

foreach($students as $cle=>$valeur) {

    echo '' . $cle . ' a ' . $valeur .' ans'. '<br />';

}



 $somme = 0;
foreach($students as $cle=>$valeur) {
    $somme += $valeur;
    };


echo 'La moyenne d\'age est de '. $moyenne = $somme /count($students).' ans';




?>