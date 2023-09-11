<?php


class user{
    public function __construct(){
        echo "user construct<br>";
    }
    public function login(){
        echo "user login<br>";
    }
    public function __destruct(){
        echo "user destruct<br>";
    }
}
class admin extends user{
    public function __construct(){
        echo "admin construct<br>";
    }
    public function login(){
        echo "admin login<br>";
    }
    public function __destruct(){
        echo "admin destruct<br>";
    }
}

$admin = new admin;
$admin->login();

$user = new user;
$user->login();

echo "hello<br>";

// destruct 
//rodina
// user construct
// user destruct
// user login 
//hend
// user construct
// user login 
// user destruct
// user login 
