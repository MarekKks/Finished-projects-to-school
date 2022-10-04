<?php


$adventure = [

	[
		'who' => 'Finn the Human',
		'wat' => "Finn is a silly kid who wants to become a great hero one day. He might not look too tough, but if there's evil around, he'll slay it. That's his deal.",
		'comments' => 4,
	],

	[
		'who' => 'Jake the Dog',
		'wat' => "Finn's best friend is a wise, old dog with a big heart. Jake has the magical ability to stretch and grow. When evil's not running amok, he plays viola with Lady Rainicorn.",
		'comments' => 23,
	],
    ];

function pozdrav($hello){
    echo 'ahoj, truľo';
}   
    
function data($adventure){
    echo '<pre>';
    print_r( $adventure );
    echo '</pre>';
}

function linkos($webos){ 
    {
    echo '<a href="'. $r .'.php?page='. $r .'">'. $r .'</a>';
    echo '<br>';
}}

function suma($pocet_produktov, $cena_jednoho){
    $suma = $cena_jednoho * $pocet_produktov;
    $cena = $suma.'€ a je ich '.$pocet_produktov;

    return $cena;
}

function porovnaj($a , $b){
	if ($a > $b){ 
        echo "a je väčšie ako $b a je $a.";
    }
    else {
        echo "b je väčšie ako $a b je $b.";
    }
} 

function scitaj(array $arr): float {
    $sum = array_sum($arr);

    foreach($arr as $child) {
        $sum += is_array($child) ? scitaj($child) : 0;
    }
    return $sum;
}

function kazdadruha($source){
    $result = array();
    $i = 0;

    foreach($source as $value) {
        if($i >= 2) {
        echo  '<br>';
        echo $i = '';
    }
        if($i == 1) {
        echo $result[] = $value;
    }
        $i++;
}}


function everysec($data){
    $count = 1;
    if(-$i > $i; $i++){ 
        echo $data[$i]. "<br>";
}}

function bign($a){ 
    $res = 0;

    foreach($a as $v) {
        if($res < $v)
        $res = $v;
    }
    echo $res;
}

function money($money){
    echo number_format( $money, 2, ',', ' ' ).'€';
}

function discount($mony, $discount){
    $one = $mony / 100;
    $price = (100 - $discount) * $one;
    $price = number_format( $price, 2, ',', '' ).'€';
    return $price;
}
?>