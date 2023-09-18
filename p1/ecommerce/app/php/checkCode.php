<?php
session_start();
include_once "../models/User.php";

if (isset($_POST['check-code'])) {
    // print_r($_SESSION['email']);die;
    //validation 

    //session -->email 
    //post -->code 
    $user = new User;
    $user->setCode($_POST['code']);
    $user->setEmail($_SESSION['email']);
    $result = $user->checkCodeByEmail();
    // print_r($result);
    // die;
    if ($result) {
        // verifeid
        $userVerified= $user->emailVerification();
        if($userVerified){
            $_SESSION['user']=$result->fetch_object();
            header('location: ../../index.php');


        }else{
            $_SESSION['validation']['failed-email-verified'] = 'something wrong';
            header('location: ../../check-code.php');

        }
    } else {
        header('location: ../../check-code.php');
    }




} else {
    header('location:../errors/403.php');
}