<?php
include_once "layouts/header.php";
include_once "middlewares/guest.php";

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
// login page
// guest
// if user is correct =>home.php
// if user not authorized =>login.php print error 

// home page
// print user name in navbar
// no access without authentication  (auth)

// logout (auth)

// profile 
// data user, update, auth
 

//validation 

// required email
if($_POST){
    // if(!empty($_POST['name']))
    $errors =[];
    // if(isset($_POST['email']) and $_POST['email']){
    //     $_SESSION['email'] = $_POST['email'];
    // }else{
    //     $errors['email-required'] ="<div class='alert alert-danger' >Email Is Required </div>";

    // }

    // if(isset($_POST['password']) and $_POST['password']){
    //     $_SESSION['password'] = $_POST['password'];
    // }else{
    //     $errors['password-required'] ="<div class='alert alert-danger' >password Is Required </div>";

    // }

    if(empty($_POST['email'])){
        $errors['email-required'] ="<div class='alert alert-danger' >Email Is Required </div>";
    }
    if(empty($_POST['password'])){
        $errors['password-required'] ="<div class='alert alert-danger' >password Is Required </div>";
    }
    
    if(empty($errors)){ //in db
        $filtUser =array_filter($users,function($user){
            return $user['email']== $_POST['email'] AND $user['password'] == $_POST['password'];
        });
        // print_r($filtUser);die;
    }
    // save session 
    // header to hame page
    if(!empty($filtUser)){

        $_SESSION['user']= array_values($filtUser)[0];
        // print_r($_SESSION);die;

        header('location:home.php');

    }
}


?>

<div class="container mt-5">
    <div class="col-4 offset-4 my-3 h1 text-center text-dark">Login</div>
    <div class="col-4 offset-4">
        <form method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" value="<?php if(isset($_POST['email'])){ echo $_POST['email'];}?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                <?php
                    if(isset($errors['email-required'])){
                        echo $errors['email-required'];
                    }
                
                ?>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                <?php
                    if(isset($errors['password-required'])){
                        echo $errors['password-required'];
                    }
                
                ?>
            </div>
            <?php
                if(isset($filtUser) and empty($filtUser)){
                    echo "<div class='alert alert-danger'>wrong email or password</div>";
                }
            
            ?>
            
            <button type="submit" class="btn btn-dark form-control">Login</button>
        </form>
    </div>
</div>
<?php
include_once "layouts/footer.php";
?>



