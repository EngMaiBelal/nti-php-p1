<?php 
session_start();

include_once "../validation/RegisterRequest.php";
// print_r($_SESSION);die;

if(isset($_POST['register'])){
   $validation = new RegisterRequest;
   // validation email
   $validation->setEmail($_POST['email']);
   $emailValidation = $validation->emailValidation(); 
   // validation password
   $validation->setPassword($_POST['password']);
   $validation->setConfirmPassword($_POST['confirm-password']);
   $passwordValidation = $validation->passwordValidation();

    if($emailValidation){
        $_SESSION['validation']['email-validation']= $emailValidation;
        header('location:../../register.php');
    }
    if($passwordValidation){
        $_SESSION['validation']['password-validation']= $passwordValidation;
        header('location:../../register.php');
    }

    // check errors 
    // insert user in db 

}else{
    header('location:../../errors/403.php');
}
// $session=[
//     'password-validation'=>[
//         'password-required'=>'...',
//         'password-invalid'=>'...',

//         'confirm-password-required'=>'...',
//         'confirm-password-invalid'=>'...',
// ],

// ];