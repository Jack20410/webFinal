<!-- Header start -->
<div class="container-fluid " >
        <nav class="navbar fixed-top navbar-expand-lg nav-header" style="font-weight:700;">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li><a class="text-white navbar-brand" style="margin-left: 20px;" href="../resources/index.php">Online Movie Booking</a></li>
            </ul>
            <span>
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 nav-header" >
                    <li class="nav-item right">
                        <a class="nav-link text-white header-item active" 
                            style="margin-right: 20px;" href="#">My ticket</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white header-item"
                        style="margin-right: 20px;" href="#" data-bs-toggle="modal" data-bs-target="#login_dialog">Log in</a></li>
                </ul>
            </span>
        </nav>
    </div>
    <!-- Login/SignUp dialog -->

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
                            <form method="post">
                                <div class="form-group mt-3 ">
                                    <label for="Email">Email</label>
                                    <input type="text" name="email" placeholder="Email" class="form-control" id="email"/>
                                </div>
                                
                                <div class="form-group mt-3 mb-3">
                                    <label for="name">Password</label>
                                    <input type="text" name="pass" placeholder="Password" class="form-control" id="pass"/>
                                </div>
                                <div class="login-section">
                                    <button type="button" class="btn btn-success mt-3 mb-3" data-dismiss="modal">Log in</button>
                                </div>
                            </form>
                    </div>
                    <!-- End login -->

                    <!-- Log out -->
                    <div class="tab-pane fade" id="nav-signup" role="tabpanel" aria-labelledby="nav-signup-tab" tabindex="0">
                        <h4 class="modal-title text-center">Sign Up</h4>
                        <form action="index.php" method="POST">
                            <div class="form-group">
                                <label for="name">Your name</label>
                                <input type="text" id="name" name="name" class="form-control" placeholder="Your name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Your email</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your email" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Your phone number</label>
                                <input type="number" id="phonenumber" name="phonenumber" class="form-control" placeholder="Your phone number" required>
                            </div>
        
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="pass" name="pass" class="form-control" placeholder="Your password" required>
                            </div>
        
                            <div class="form-group">
                                <label for="password">Repeat your password</label>
                                <input type="password" id="re_pass" name="re_pass" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-success px-5 mr-2">Sign up</button>
                        </form>
                    </div>
                    <!-- End log out -->
                  </div>
            </div>
        </div>
        </div>
    </div>