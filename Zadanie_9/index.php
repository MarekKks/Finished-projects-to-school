<DOCTYPE! html>
<html>
<head>
	<meta charset="UTF-8">

	<title>Document</title>
</head>
<body>

<h1>Základ</h1>

<?php

require 'dat.php';

echo '<h2>a</h2>';

pozdrav('hello');


echo '<h2>b</h2>';

data($adventure);

echo '<h2>c</h2>';


$lol = [ 'web', 'gule', 'vajcia' ];
linkos($lol);


echo '<h2>d</h2>';

$pocet_produktov = 5;
$cena_jedneho = 300;

echo 'Spoločná suma je '.suma($pocet_produktov, $cena_jedneho);


echo '<h2>e</h2>';

$ab = 650;
$ba = 600;
porovnaj($ab, $ba);

echo '<h2>f</h2>';

$numbers = [
    'num' => 10,
    'num2' => 15,
    'num3' => 19
];

echo scitaj($numbers);


echo '<h2>g</h2>';


$random = [
    'n1' => 22,
    'n2' => 55,
    'n3' => 30,
    'n4' => 85,
    'n5' => 10,
    'n6' => 15,
    'n7' => 20,
    'n8' => 25
];

echo kazdadruha($random);

echo '<br>';

$data = [0,1,2,3,4,5,6,7,8,9,10];


everysec($data);

echo '<h2>h</h2>';

$a = array(1, 44, 5, 6, 68, 9);

echo bign($a);

echo '<h2>i</h2>';

$peniaze = 21410.77; 

money($peniaze);

echo '<h2>j</h2>';

$suma = 125;
$zlava = 10;

echo discount($suma, $zlava)
?>

</body>
</html>
