<html>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Premenné</title>

	<link rel="stylesheet" href="css/main.css">
<meta>

<body>

<?php

$directors = [
    [
        'id' => 1,
        'first_name' => 'Edgar',
        'last_name' => 'Wright',
        'country' => 'United Kingdom',
        'birthdate' => '1974-04-18',
    ],
    [
        'id' => 2,
        'first_name' => 'Jim',
        'last_name' => 'Jarmusch',
        'country' => 'United States',
        'birthdate' => '1953-01-22',
    ],
    [
        'id' => 3,
        'first_name' => 'Leos',
        'last_name' => 'Carax',
        'country' => 'France',
        'birthdate' => '1960-11-22',
    ],
    [
        'id' => 4,
        'first_name' => 'Ingmar',
        'last_name' => 'Bergman',
        'country' => 'Sweden',
        'birthdate' => '1918-07-14',
    ],
    [
        'id' => 5,
        'first_name' => 'Andrej',
        'last_name' => 'Tarkovskij',
        'country' => 'Russia',
        'birthdate' => '2000-10-10',
    ],
];

foreach ($directors as $value) {
    echo '<li>'.$value['first_name'].' '.$value['last_name']. '</li>';
};

echo '<br> </br>';


$i = 0;
while ($i < count($directors)) {
   $a = $directors[$i];
   echo '<li>'.$a['first_name'].' '.$a['last_name']. '</li>';
   $i++;
}

echo '<br> </br>';

for($i = 0; $i < count($directors); ++$i) {
    echo '<li>'.$directors[$i]['first_name'].' '.$directors[$i]['last_name'].'</li>';
}

?>

<select name="choice">
  <?php
  foreach ($directors as $value) {
    echo '<option value="'.$value['first_name'].' '.$value['last_name'].'" >' .$value['first_name'].' '.$value['last_name'].' </option>';
};
?>
</select>




</body>
</html>