<?php


class User
{
    public $first_name;
    public $last_name;
    public $email;
    public $avatar;

    public function __construct($first_name, $last_name, $email, $avatar)
    {
        $this->name = $first_name.' '.$last_name;
        $this->avatar = $avatar;
        $this->email = $email;
    }
    public function setUser($first_name, $last_name, $email, $avatar){{
        $this->name = $first_name.' '.$last_name;
        $this->avatar = $avatar;
        $this->email = $email;
     }}
     public function getUser(){
        return $this->name;
        return $this->avatar;
        return $this->email;
    }
}

class Admin extends User
{
    public function _Admin()
    { 
        echo 'ADMIN';
    }
    public function _kill()
    {
        echo"Zničim všetko muhahahahaha";
    }
}
$robert = new User ('Robert', 'Roro', 'robi2@gmail.com','');
echo $robert->name;
echo '<br>';
echo $robert->email;
echo '<br>';
echo '<img src="'.$robert->avatar.'" alt="User ty dežo"/> '; //link
echo '<br>';
echo '<br>';


$admin = new Admin ("Admin","administratívny", "admin@gmail.com","");

echo $admin->_Admin();
echo '<br>';
echo $admin->name;
echo '<br>';
echo $admin->email;
echo '<br>';
echo '<img src="'.$admin->avatar.'" alt="User ty dežo" /> ';
echo '<br>';
$admin->_kill();
?>