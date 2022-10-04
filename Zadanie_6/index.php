<html>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Premenné</title>
    <link rel="stylesheet" href="css/main.css">
<meta>

<body>

<?php

$data = [
    [
        "title" => "The World's End",
        "genre" => "Sci-fi",
        "year"  => 2013,
        "gross" => 26004851
    ],
    [
        "title" => "Scott Pilgrim vs. the World",
        "genre" => "Sadness",
        "year"  => 2010,
        "gross" => 31524275
    ],
    [
        "title" => "Hot Fuzz",
        "genre" => "Buddy Cop",
        "year"  => 2007,
        "gross" => 23637265
    ],
    [
        "title" => "Shaun of the Dead",
        "genre" => "Zombie",
        "year"  => 2007,
        "gross" => 13542874
    ],
];

?>
  <h1> Edgar Wright</h1>

<?php if (count($data) > 0): ?>

      <table>

      <thead>
        <tr>
          <th><?php echo implode('</th><th>', array_keys(current($data))); ?></th>
        </tr>
      </thead>

      <tbody>
        <?php foreach($data as $row):
          array_map('htmlentities', $row);
        ?>

        <tr>
          <td>
          <?php echo implode('</td><td>', $row);?>    
          </td>
        </tr>

          <?php endforeach;?>

    <tr>
        
          <?php 
          $sum = 0;
          foreach ($data as $key => $value) { 
          $sum += $value['gross'];
          }?> 


          <td>
            <th> 
            
            </th>

            <th> 
            
            </th>

            <th> 
              <?php echo '$'.number_format($sum) ?> 
            </th> 
          </td> 
    
      
    </tr>
      </tbody>

    </table>

<?php endif; ?>

</body>
</html>