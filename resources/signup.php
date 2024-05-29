<?php

require_once("users_db.php");

$name = $email = $password = $re_pass = '';
$error = $success = '';


if(isset($_POST['name']) && isset($_POST['email']) 
    && isset($_POST['password']) && isset($_POST['re_pass'])){
    $name = $_POST['name'];
    $email = $_POST['email'];   
    $password = $_POST['password']; 
    $re_pass = $_POST['re_pass']; 


    // validate input
    if (empty($name)) {
        $error = 'Please enter your name';
    }
    else if (empty($email)) {
        $error = 'Please enter your email';
    } else if (empty($password)) {
        $error = 'Please enter your password';
    } else if (strlen($password) < 6) {
        $error = 'Password must have at least 6 characters';
    } else if ($password != $re_pass) {
        $error = 'Password does not match';
    } else {
        $result = signup($name, $email, $password, $re_pass);
        if (gettype($result) === 'boolean'){
            header("location:header.php");
            echo "<div class='alert alert-success mt-3 text-center'> Sign up successfully. Please log in. </div>";
        } else {
            $error = $result;
        }
    }
}
?>

<div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab" tabindex="0">
                    <h4 class="modal-title text-center">Sign Up</h4>
                        <form action="" method="post">
                            <div class="form-group mt-3">
                                <label for="name">Your name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your name" value="<?= $name?>" required>
                                <div class="text-danger"><?= $name_err ?></div>
                            </div>
                            
                            <div class="form-group mt-3">
                                <label for="email">Your email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="<?= $email?>" required>
                                <div class="text-danger"><?= $email_err ?></div>
                            </div>

                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="<?= $password?>" required>
                                <div class="text-danger"><?= $password_err ?></div>
                            </div>

                            <div class="form-group mt-3">
                                <label for="re_password">Repeat your password</label>
                                <input type="password" id="re_pass" name="re_pass" class="form-control" placeholder="Repeat your password" value="<?= $re_pass?>" required>
                            </div>
            
                
                            <?php if(!empty($error)){ ?>
                                <div class="alert alert-danger"> <?= $error ?> </div>
                            <?php } ?>
                            
                            <button type="submit" id="signup-submit" class="btn btn-success px-5 mt-3 mr-2">Sign up</button>
                        </form>
                    </div>
