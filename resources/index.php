<?php 
    require_once('../resources/film_db.php'); // Ensure this is included to get the get_products function

    $film_available = get_products(); //fetch products here
    $film_upcoming = upcoming_film();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Movie Booking</title>
    <link rel="icon" href="../assets/cinema.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link rel="stylesheet"
         href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
</head>
<body>
    <!-- Header start -->
    <div class="container-fluid " >
        <nav class="navbar fixed-top navbar-expand-lg nav-header" style="font-weight:700;">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li><a class="text-white navbar-brand" style="margin-left: 20px;" href="index.php">Online Movie Booking</a></li>
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

    <!-- Login/SignUp dialog -->

    <!-- Header end -->
    
    <!-- Menu start -->
    <div class="container-fluid">
        <div class="menu container" style="padding-top: 4.5rem;" >
            <div class="logo" style="float: inline-start; display: block ">
                <img
                    src="../assets/images/cinema.svg"
                    class="img-thumbnail rounded-circle"
                    alt="logoweb"
                    href="index.php"/>
            </div>
            
            <ul class="nav justify-content-center mainmenu">
                <li class="nav-item"><a class="nav-link" id="menu-item" href="../pages/movies.php" aria-current="page">MOVIES</a></li>
                <li class="nav-item"><a class="nav-link" id="menu-item" href="../pages/theaters.php">THEATERS</a></li>
                <li class="nav-item"><a class="nav-link" id="menu-item" href="#">ABOUT</a></li>
            </ul>
        </div>
        <!-- Menu end -->
        
        <!-- carousel start -->
          <div id="carouselRide" class="carousel slide container-fluid " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="../assets/images/Carousel/furiosa-2048_1716547337203.jpg" width="800" height="800" class="d-block w-100" alt="carou1">
              </div>

              <div class="carousel-item active" data-bs-interval="3000">
                <img src="../assets/images/Carousel/carousel2.jpg" width="800" height="800" class="d-block w-100" alt="carou2">
              </div>

              <div class="carousel-item active" data-bs-interval="3000">
                <img src="../assets/images/Carousel/doraemon.jpg" width="800" height="800" class="d-block w-100" alt="carou3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselRide" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselRide" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
        <!-- carousel end -->
    </div>

        <!-- Now showing -->
        <?php include 'now_showing.php'?>

        <!-- Upcomming start -->
        <?php include 'upcoming.php'?>

        <!-- Footer -->
        <div class="footer">     
              <p> Copyright &copy; 2024 TDTU</p>
        </div>
        <!-- Footer -->
        
    </div>
</body>
</html>