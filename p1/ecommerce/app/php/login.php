<?php
session_start();
include_once "../validation/RegisterRequest.php";
include_once "../validation/LoginRequest.php";
include_once "../models/User.php";
include_once "../mail/sendMail.php";
// login
// print_r($_POST);die;

// validation password , email 
// var_dump($_POST['login']);die;
if(isset($_POST['login'])){
    // validation email
    $emailValidation = new RegisterRequest;
    $emailValidation->setEmail($_POST['email']);
    $emailValidationResult = $emailValidation->emailValidation(); 

     if($emailValidationResult){
         $_SESSION['validation']['email-validation']= $emailValidationResult;
         header('location:../../login.php');
     }

     //password validation
     $passwordValidation = new LoginRequest;
     $passwordValidation->setPassword($_POST['password']);
     $passwordValidationResult = $passwordValidation->passwordValidation();
     if($passwordValidationResult){
        $_SESSION['validation']['password-validation']= $passwordValidationResult;  // show it in html
        header('location:../../login.php');
        // echo"password no";

     }
    //  if(empty($_SESSION['validation'])){
        // print_r('ok');die;
        // check user on db
        $user= new User;
        $user->setEmail($_POST['email']); 
        $user->setPassword($_POST['password']); 
        $userDb = $user->login();
        // print_r($userDb);die;

        if($userDb){
            $userAuth = $userDb->fetch_object();
            if($userAuth->email_verified_at){

                $_SESSION['user'] = $userAuth;
                // print_r( $userAuth);die;
                header('location:../../index.php');
            }else{
                //send mail
                $email = new sendMail;
                $body = "DEAR ".$userAuth->name."<br> your verification code : ".$userAuth->code;
                $result= $email->sendEmail($userAuth->email,'verfication code', $body);
                if($result){
                    $_SESSION['email']=$userAuth->email;
                    header('location:../../check-code.php');
                }else{
                    $_SESSION['validation']['failed-email']='please try again';
                    header('location:../../login.php');
                }
            }
        }else{
            $_SESSION['validation']['email-password-wrong']= 'email or password wrong';
            header('location:../../login.php');
        }
    //  }
    }else{
    header('location:../../errors/403.php');
}