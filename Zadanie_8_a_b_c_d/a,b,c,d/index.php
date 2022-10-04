<html>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/my.css">
	<title>Zadanie 8</title>
	
<meta>

<body>
<h2>Úloha a </h2>
<?php

$rows = 4;

for ( $i = 1; $i <= $rows; $i++){
    $tmp = $i.'.';
    for ( $a = 1. ; $a <= $tmp; $a++){ 
    }
    echo "$tmp hodnota<br>";
}
?>

<h2>Úloha b</h2>

<?php

$num = 10;

for ($i=1; $i <= $num; $i++){ 
    if ($i == $num){ 
        echo "$i";
    }
    else {
        echo "$i-";
    }
}


?>

<h2>Úloha c</h2>

<?php

$row = 10;

for ( $i = 1; $i <= $row; $i++){
    $tmp = $i.'.';
    echo "$tmp <a href ='show.php?id=$i'>záznam ".$i."</a>, <a href ='edit.php?id=$i'>edit </a>,<a href ='delete.php?id=$i'> delete</a> <br>";
}
?>

<h2>Úloha d</h2>

<?php 
$pic = glob("pics-new/*");
$pic = str_replace('_',' ', $pic);
$pic = str_replace('-',' ', $pic);
$pic = str_replace('.png','', $pic);
$pic = str_replace('.jpg','', $pic);
$pic = str_replace('pics new/','', $pic);

echo '<ol>';
foreach($pic as $file){
    echo '<li>'.ucwords($file).'</li>';
}
echo '</ol>';


$pic1 = glob("pics-new/*");
$pic2 = glob("pics-new/*");


$pic1 = str_replace('pics-new/','', $pic1);
$pic2 = str_replace('pics-new/','', $pic2);
$pic1 = str_replace('.jpg','', $pic1);
$pic1 = str_replace('.png','', $pic1);
$pic1 = str_replace('-',' ', $pic1);
$pic1 = str_replace('_',' ', $pic1);


$pics = array_combine($pic1, $pic2);

    foreach($pics as $k=>$a){
        echo ' { type: quiz, title: '.$k.', pic: '.$a.' }, <br>';
    }
?>

</body>
</html>