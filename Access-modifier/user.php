<!-- public can be access anywhere-->
<!--private can not be access outside class it can be access inside class-->
<!--protected can not access with that particular class(parent class) it can be access by child class means
uses inheritance-->

<?php

class User{

    public $name='avinash';
    private $password='123456';
    protected $email='abc@gmail.com';

    public function getPassword(){
       return  $this->password;
    }

}

class Admin extends User{
    public function __construct() {
        echo $this->email;
    }
}
$user =new User();
echo $user->name;
echo "<br>";
echo $user->getPassword();
echo "<br>";
$admin =new Admin();

