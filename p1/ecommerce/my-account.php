<?php
include_once "layouts/header.php";
include_once "app/middlewares/auth.php";
include_once "layouts/nav.php";
include_once "app/models/User.php";
// info contact
// email
// password
// print_r($_SESSION['user']);

$userobj =new User;
$userobj->setEmail($_SESSION['user']->email);

if(isset($_POST['update-profile'])){
//validation
$success='';
$errors=[];
//update user
$userobj->setName($_POST['name'])->setPhone($_POST['phone'])->setEmail($_SESSION['user']->email);
$result = $userobj->update();
if($result){
    $success = 'Data Updated Successfully';
}else{
    $error['something-wrong']= 'something wrong';
}
}
if(isset($_POST['change-password'])){
    
}
if(isset($_POST['change-email'])){
    
}
$userDataUpadated= $userobj->getUserByEmail();
$user= $userDataUpdated->fetch_object();
?>
<div class="breadcrumb-area bg-image-3 ptb-150">
    <div class="container">
        <div class="breadcrumb-content text-center">
            <h3>MY ACCOUNT</h3>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li class="active">My Account</li>
            </ul>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End -->
<!-- my account start -->
<div class="checkout-area pb-80 pt-100">
    <div class="container">
        <div class="row">
            <div class="ml-auto mr-auto col-lg-9">
                <div class="checkout-wrapper">
                    <div id="faq" class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>1</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-1">Edit your account information </a></h5>
                            </div>
                            <div id="my-account-1" class="panel-collapse collapse show">
                                <!-- show -->
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-12">
                                        </div>
                                    </div>
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="billing-information-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>My Account Information</h4>
                                                <h5>Your Personal Details</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-4 offset-4 mb-3">
                                                    <img src="assets/img/users/default.png" class="w-100 rounded-circle" alt="">
                                                    <input type="file" name="image" id="" class="form-control">
                                                    
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="billing-info">
                                                        <label>Name</label>
                                                        <input type="text" name="name" value="<?= $user->name ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="billing-info">
                                                        <label>Phone</label>
                                                        <input type="text" name="phone" value="<?= $user->phone?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-btn">
                                                    <button type="submit" name="update-profile">Update</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>2</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-2">Change your password </a></h5>
                            </div>
                            <div id="my-account-2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form method="post">
                                        <div class="row">
                                            <div class="col-12">
                                            </div>
                                        </div>
                                        <div class="billing-information-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>Change Password</h4>
                                                <h5>Your Password</h5>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Old Password</label>
                                                        <input type="password" name="old-password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>New Password</label>
                                                        <input type="password" name="new-password">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Confirm Password </label>
                                                        <input type="password" name="confrim-password">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-btn">
                                                    <button type="submit" name="change-password">Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h5 class="panel-title"><span>3</span> <a data-toggle="collapse" data-parent="#faq" href="#my-account-3">Change your email </a></h5>
                            </div>
                            <div id="my-account-3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <form method="post">
                                        <div class="billing-information-wrapper">
                                            <div class="account-info-wrapper">
                                                <h4>Change Email</h4>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="billing-info">
                                                        <label>Email</label>
                                                        <input type="email" name="email" value="<?= $user->email?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="billing-back-btn">
                                                <div class="billing-btn">
                                                    <button type="submit" name="change-email">Change</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include_once "layouts/footer.php";
?>