<?php
include_once "layouts/header.php";
include_once "middlewares/auth.php";
include_once "layouts/nav.php";
// print_r($_FILES);die;
$errors = [];
if ($_POST) {

        if (empty($_POST['name'])) {
            $errors['name-required'] = "<div class='alert alert-danger' >Name Is Required </div>";
        }
        if (empty($_POST['email'])) {
            $errors['email-required'] = "<div class='alert alert-danger' >email Is Required </div>";
        }
        if (empty($_POST['gender'])) {
            $errors['gender-required'] = "<div class='alert alert-danger' >gender Is Required </div>";
        }
        if ($_FILES['image']['error'] == '0') {
            $maxSize = 10 ** 6;
            $allowedExtensions =['png', 'jpg', 'jpeg'];
            $extImage= pathInfo($_FILES['image']['name'], PATHINFO_EXTENSION);
            if($_FILES['image']['size'] > $maxSize){
                $errors['image']['max-size']=  "<div class='alert alert-danger' > size must be less than 1 mega </div>";
            }
            if(!in_array($extImage, $allowedExtensions )){
                $errors['image']['wrong-extension']=  "<div class='alert alert-danger' > Extension must be jpeg, jpg, png </div>";
            }
        }
        // image validation
        // extension
        // size
        // path temp --> perment
        $photoPath= 'images/';
        $photoName = time().'.'.$extImage;
        $fullPath = $photoPath.$photoName;
        // move_uploaded_file(temp, perm);
        // uploaded image
        if (empty($errors)) {
            $_SESSION['user']['name'] = $_POST['name'];
            $_SESSION['user']['email'] = $_POST['email'];
            $_SESSION['user']['gender'] = $_POST['gender'];
            $success = "<div class='alert alert-success' > Successfuly updated </div>";
            move_uploaded_file($_FILES['image']['tmp_name'], $fullPath );
            $_SESSION['user']['image'] = $photoName;


        }
}
?>


<div class="container">
    <div class="row">
        <div class="col-12 text-dark text-center h1 mt-5">
            Profile
        </div>
        <div class="col-12  text-center">
            <?php
            if (isset($success)) {
                echo $success;
            }
            ?>
        </div>
        <div class="col-8 offset-2">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-row my-5">
                    <div class="col-6 offset-3">
                        <img src="images/<?= $_SESSION['user']['image'] ?>" class="w-100 rounded-circle" alt="">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <!-- // errors image foeach $_errors['image' ]-->
                </div>
                <div class="form-row">
                    <div class="col-6">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" value="<?= $_SESSION['user']['email'] ?>" name="email" value=""
                            class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <?php
                        if (isset($errors['email-required']) and $errors['email-required']) {
                            echo $errors['email-required'];
                        }

                        ?>
                    </div>
                    <div class="col-6">
                        <label for="exampleInputPassword1">Name</label>
                        <input type="text" value="<?= $_SESSION['user']['name'] ?>" name="name" value=""
                            class="form-control" id="exampleInputPassword1">
                    </div>
                </div>
                <?php
                if (isset($errors['name-required'])) {
                    echo $errors['name-required'];
                }

                ?>

                <div class="form-row">
                    <div class="col-12">
                        <label for="exampleInputPassword1">Gender</label>
                        <select name="gender" class="form-control" id="exampleInputPassword1">
                            <option <?php if ($_SESSION['user']['gender'] == 'm') {
                                echo 'selected';
                            } ?>value="m">Male
                            </option>
                            <option <?php if ($_SESSION['user']['gender'] == 'f') {
                                echo 'selected';
                            } ?>value="f">Female
                            </option>
                        </select>
                    </div>
                    <?php
                    if (isset($errors['gender-required'])) {
                        echo $errors['gender-required'];
                    }

                    ?>
                </div>
                <div class="form-row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark form-control">Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include_once "layouts/footer.php";
?>