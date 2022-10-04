<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>php funsies</title>

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="container">

	<div class="page-header">
		<h1 class="text-muted">fun times php</h1>
	</div>

	<?php

		// ulozime hodnoty do premennych
		$item_count = 5;
		$item_price = 350;

		// vynasobime ich a vysledok ulozime do premennej $sum
		$sum = $item_count * $item_price;

		// premennu $sum vypiseme na stranku
		// cize na stranke sa objavi cislo
		echo $sum;

		echo '<br>';

		$item_1 = 20;
		$item_2 = 20;

		if ( $item_1 > $item_2 )
		{  
			echo 'item1 je vácej lol';
 		}
		else if ( $item_1 < $item_2 )
		{
			 echo 'item2 je vácej lol';
		}
		else if ( $item_1 = $item_2 )
		{
			 echo 'oni sa rovnajú';
		}

		 echo '<br>';

		 $item_3 = "YOLO";
		 $item_4 = "OLOY";

		 if ( $item_3 > $item_4 )
		{ 
			echo "<p> väčšie slovo je $item_3 </p>";
 		}
		else if ( $item_3 < $item_4 )
		{
			 echo "<p> väčši slovo je $item_4 </p>";
		}
		else if ( $item_3 = $item_4 )
		{
			 echo "<p> oni sa rovnajú </p>";
		}
		

		$number = 5;
		$min = 6;

		if ( $number > $min || $number = $min )  
		{
			echo 'number je vácej ako min alebo rovné';
		}
	?>

</body>
</html>