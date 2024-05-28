<?php
$name = '';
$email = '';
$password = '';
$error = '';
if (isset($_POST['email'])&& isset($_POST['password'])){
    $user = $_POST['email'];
    $password = $_POST['password'];

    if(empty($email)){
        $error = 'Please enter your email !';
    } else if(empty($password)){
        $error = 'Please enter your password !';
    } 
}
?>

<!-- Log in / Sign up modal -->
<div class="modal fade" id="login_dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-white">
           
            <div class="modal-body signin-modal">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-login-tab" data-bs-toggle="tab" data-bs-target="#nav-login" 
                      type="button" role="tab" aria-controls="nav-login" aria-selected="true">Log In</button>
                      <button class="nav-link" id="nav-signup-tab" data-bs-toggle="tab" data-bs-target="#nav-signup" 
                      type="button" role="tab" aria-controls="nav-signup" aria-selected="false">Sign Up</button>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <!-- Login -->
                    <div class="tab-pane fade show active" id="nav-login" role="tabpanel" aria-labelledby="nav-login-tab" tabindex="0">
                        <h4 class="modal-title text-center">Log In</h4>
                            <form action="login.php" method="post">
                                <div class="form-group mt-3 ">
                                    <label for="Email">Email</label>
                                    <input type="text" name="email" placeholder="Email" class="form-control text-black" id="email" value="<?= $email?>"/>
                                </div>
                                
                                <div class="form-group mt-3 mb-3">
                                    <label for="name">Password</label>
                                    <input type="password" name="password" placeholder="Password" class="form-control" id="password" value="<?= $password?>"/>
                                </div>
                                <?php
                                        if (!empty($login_err_msg)){
                                            echo "<div class=' alert alert-danger text-center '>$login_err_msg</div>";
                                        }
                                    ?>
                                <div class="login-section">
                                    <button name="submit" type="submit" class="btn btn-success mt-3 mb-3" data-dismiss="modal">Log in</button>
                                </div>
                            </form>
                    </div>
                    <!-- End login -->

                    <!-- Sign up -->
                    <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab" tabindex="0">
                        <h4 class="modal-title text-center">Sign Up</h4>
                        <form action="signup.php" method="post">
                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your name" value="<?= $name?>" required>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Your email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your email" value="<?= $email?>" required>
                            </div>
        
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" class="form-control" placeholder="Your password" value="<?= $password?>" required>
                            </div>
        
                            <div class="form-group">
                                <label for="re_password">Repeat your password</label>
                                <input type="password" id="re_pass" name="re_pass" class="form-control" >
                            </div>
                            <button type="submit" class="btn btn-success px-5 mr-2">Sign up</button>
                        </form>
                    </div>
                    <!-- End Sign up -->
                  </div>
            </div>
        </div>
        </div>
    </div>