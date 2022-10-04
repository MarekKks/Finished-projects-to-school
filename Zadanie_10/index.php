<DOCTYPE! html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<h1>A</h1>

<?php
function anchor($url, $text){
    echo '<a href="'.$url.'">'.$text.'</a>';
};
?>
<p>ked chces googlit, pouzi tento kvalitny <?php anchor('https://www.bing.com/?setlang=sv&cc=SE','vyhladavac')?></p>

<h2>B</h2>
<?php 

function making_anchor($url1, $text1, $array)
// ako hodiť do linku array atributy (html)
  {
  echo '<a href="'.$url1.'"';

   foreach($array as $key => $value){  // vytiahol som si s array kluc (hodnota jedna 'title') a value/hodnotu ('toto je link')
    echo $key.'="'.$value.'"';
    }

  echo '> '.$text1.'</a>';
  }

$atts = [
    'title' => 'toto je link',
    'class' => 'red',
];

echo making_anchor('https://www.bing.com/?setlang=sv&cc=SE','vyhladavac',$atts);


?>




<h2>C</h2>
<?php
function redirect($url)
{
  $base_url = 'http://localhost/api/Zadanie/Zadanie_10/';

  if((strrchr($url, "/")) !== false){
    $url = substr(strrchr($url, "/"), 1);
  }
// strrchr nájdenie poslesledného charakteru (znaku) v stringu
// Note our use of ===.  Simply == would not work as expected
  if ($url === 'index.php'){
    echo '<a href="'.$base_url.''.$url.'">LINK</a><br>';
  }
  else if ( (strpos( $url, '.php')) === false ){
     echo '<a href="'.$base_url.''.$url.'.php">LINK</a><br>';
  }
// strpos  Find the position of the first occurrence of a substring in a string
// The !== operator can also be used.  Using != would not work as expected
}
echo redirect('index.php');
echo redirect('index');
echo redirect('http://localhost/api/Zadanie/Zadanie_10/index.php');
echo redirect('http://localhost/api/Zadanie/Zadanie_10/index');
?>

<h2>D</h2>
<?php


// použijeme switch na výmenu formátu. (namiesto if)
function datum($dat, $format = 'sk'){

  $den = date_create_from_format('m-d-Y', $dat); // spravili sme si premennu den ktora vytvara datum z formatu (prakticky preklad funkcie)

  switch ($format) {
    case 'sk':
        echo date_format($den, "d.m.Y"); // date format spravi to že na formatuje dni na dni/mesiace/roky
        break;
    case 'us':
        echo date_format($den, "m/d/Y");
        break;
    case 'jp':
        echo date_format($den, "d-m-Y");
        break;
  }
}

$datum = '12-28-1982';

echo ' Slovensko'.datum($datum, 'sk');
echo '<br>';
echo ' USA' .datum($datum, 'us');
echo '<br>';
echo ' Japonsko' .datum($datum, 'jp');
?>

<h2>E</h2>

<?php 


function push_to_array(){

  $array_numbers = func_get_args(); // spočíta koľko argumentov to je
  $array = $array_numbers[0];

  foreach ($array_numbers as $key => $value){ // premenili sme si ten počet na kluče a value
    if ( $key > 0 ){
			$array[] = $value;
		}
  }
	return $array;
};

$data = [ 'one', 'two', 'joj' ];
$data = push_to_array($data,'yoy','yolo');
echo '<pre>';
print_r( $data );
echo '</pre>';

function push_to_array2(&$array){

  $array_numbers = func_get_args();

  foreach ($array_numbers as $key => $value){ //pomaly to isté len sme tam pridali znak & musim este zistit co to robi 
    if ( $key > 0 ){
			$array[] = $value;
		}
  }
	return $array;
};

$datan = ['one', 'two', 'balls' ];
push_to_array2($datan, 'four', 'fiver');
echo '<pre>';
print_r( $datan );
echo '</pre>';
?>

</body>
</html>
