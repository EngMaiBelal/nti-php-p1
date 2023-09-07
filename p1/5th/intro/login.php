<?php
session_start(); 
// $_SESSION
// include "layouts/header.php";        // path --> warnning 

include_once "layouts/header.php";

// require_once "layouts/header.php"; // path --> fatal code

// include_once ,include, require_once , require

// $email = "email@gmail.com"; //db
// $password = 123456;

// if($_POST){
//     $_SESSION['email']    = $_POST['email'];
//     $_SESSION['password'] = $_POST['password'];
    
//     if($_SESSION['email'] == $email and  $_SESSION['password'] == $password){
//         $msg = "correct email";
//     }else{
//         $msg = "wrong email or password";
//     }
// }


$users = [
    [
        'id' => 1,
        'name' => 'ahmed',
        'email' => 'ahmed@gmail.com',
        'password' => '123456',
        'image' => '1.jpg',
        'gender' => 'm'
    ],
    [
        'id' => 2,
        'name' => 'esraa',
        'email' => 'esraa@gmail.com',
        'password' => '123456',
        'image' => '2.jpg',
        'gender' => 'f'
    ],
    [
        'id' => 3,
        'name' => 'mohamed',
        'email' => 'mohamed@gmail.com',
        'password' => '123456',
        'image' => '3.jpg',
        'gender' => 'm'
    ]
];




?>


<div class="container mt-5">
    <div class="col-4 offset-4 my-3 h1 text-center text-dark">Login</div>
    <div class="col-4 offset-4">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" value="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                
            </div>
            <?php 
            if(isset($msg)){ 
                echo $msg;
            }
            ?>
            <button type="submit" class="btn btn-dark form-control">Login</button>
        </form>
    </div>
</div>

<?php
include "layouts/footer.php" ;
?>