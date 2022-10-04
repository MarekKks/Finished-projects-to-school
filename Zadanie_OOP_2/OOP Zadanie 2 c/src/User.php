<?php 


namespace login;

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



?>