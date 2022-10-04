<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Úloha E</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/my.css">

        
</head>
<body class="container">



<header>


<?php 
    $text = glob("*.php");
    $link = glob("*.php");

    $s = array_combine($text, $link);

    $s = str_replace('aheader.php', "", $s);
    $s = str_replace('zfooter.php',"", $s);
    $s = str_replace('-',' ', $s);
    $s = str_replace('.php','', $s);
    $s = str_replace('produkty/','', $s);


    foreach($s as $k=>$a){
        echo '<a href = "'.$k.'">'.ucwords($a).'</a>';
    }
?>

</header>

<main>