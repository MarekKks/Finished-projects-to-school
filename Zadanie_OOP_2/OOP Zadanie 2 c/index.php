b<?php

//require 'src/User.php';
//require 'src/Admin.php';

require 'vendor/autoload.php';

use login\User;
use login\Admin;

$robert = new User ('Robert', 'Roro', 'robi2@gmail.com','');
echo $robert->name;
echo '<br>';
echo $robert->email;
echo '<br>';
echo '<img src="'.$robert->avatar.'" alt=" ty dežo"/> '; //link
echo '<br>';
echo '<br>';


$admin = new Admin ("Admin","administratívny", "admin@gmail.com","");

echo $admin->_Admin();
echo '<br>';
echo $admin->name;
echo '<br>';
echo $admin->email;
echo '<br>';
echo '<img src="'.$admin->avatar.'" alt=" ty dežo" /> ';
echo '<br>';
$admin->_kill();
?>