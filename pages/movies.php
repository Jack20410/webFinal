<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Movie Booking</title>
    <link rel="icon" href="/web-final/assets/cinema.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="/web-final/resources/css/main.css">
</head>
<body>
    <!-- Header start -->
    <div class="container-fluid " >
        <nav class="navbar fixed-top navbar-expand-lg nav-header" style="font-weight:700;">
            <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                <li><a class="text-white navbar-brand" style="margin-left: 20px;" href="../resources/index.php">Online Movie Booking</a></li>
            </ul>
            <span>
                <ul class="navbar-nav me-auto mt-2 mt-lg-0 nav-header" >
                    <li class="nav-item right"><a class="nav-link text-white header-item active" style="margin-right: 20px;" href="#">My ticket</a></li>
                    <li class="nav-item"><a class="nav-link text-white header-item" style="margin-right: 20px;" href="#">Log in</a></li>
                </ul>
            </span>
        </nav>
    </div>

    <!-- Header end -->
    
    
    <div class="container-fluid">
        
        <!-- Menu start -->
        <div class="menu container" style="padding-top: 4.5rem;" >
            <div class="logo" style="float: inline-start; display: block ">
                <img
                    src="/web-final/assets/images/cinema.svg"
                    class="img-thumbnail rounded-circle"
                    alt="logoweb"
                    />
            </div>
            
            <ul class="nav justify-content-center mainmenu">
                <li class="nav-item"><a class="nav-link" id="menu-item" href="movies_showing.php" aria-current="page">MOVIES</a></li>
                <li class="nav-item"><a class="nav-link" id="menu-item" href="theaters.php">THEATERS</a></li>
                <li class="nav-item"><a class="nav-link" id="menu-item" href="#">ABOUT</a></li>
            </ul>
        </div>
        <!-- Menu end -->

        <!-- Main -->
        <div class="container">

            <!-- Breadcrumbs -->
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a style="text-decoration: none;" href="#"><i class="fa fa-home" aria-hidden="true"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Vây hãm: Kẻ trừng phạt</li>
                </ol>
            </nav>
            <!-- End Breadcrumbs -->

            <span class="h1 text-white" style="padding: 20px 0;">Movie detail</span>
            <!-- Product detail -->
            <div class="product-info row" style="color: white;">
                <div class="movie-poster col-6">
                    <img src="/web-final/assets/images/Poster/21bfa62437a9a7c24aa3837446a5d4f1.png" alt="" >

                    <button class="btn btn-primary" href="#">Booking ticket</button>
                </div>
                <div class="movie-detail col-6">
                    <div class="movie-name movie-info">
                        <span class="h1"> Vây hãm: Kẻ trừng phạt </span>
                    </div>

                    <div class="movie-director movie-info">
                        <h4>Director : </h4>
                        <p>Heo Myeong Haeng</p>
                    </div>

                    <div class="movie-actress movie-info">
                        <h5>Actress : </h5>
                        <p>Ma Dong-seok, Kim Mu-yeol, Lee Joo-bin</p>
                    </div>

                    <div class="movie-genre movie-info">
                        <h5>Movie genre : </h5>
                        <p>Action, Crime</p>
                    </div>

                    <div class="movie-release movie-info" >
                        <h5>Day release : </h5>
                        <p>26/04/2024</p>
                    </div>

                    <div class="movie-language movie-info">
                        <h5>Language : </h5>
                        <p>Korean - Subtitle: Vietnamese, English</p>
                    </div>
                </div>
            
                <!-- Trailer -->
            <div class="trailer">
                <iframe width="560" height="315" src="https://media.lottecinemavn.com/Media/MovieFile/MovieMedia/202403/11434_301_100001.mp4" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <!-- End trailer -->

            </div>

            <!-- End product detail -->

            <!-- carousel start -->
          <div id="carouselRide" class="carousel slide container-fluid " data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="3000">
                <img src="/web-final/assets/images/Carousel/furiosa-2048_1716547337203.jpg" width="800" height="500" class="d-block w-100" alt="carou1">
              </div>

              <div class="carousel-item " data-bs-interval="3000">
                <img src="/web-final/assets/images/Carousel/carousel2.jpg" width="800" height="500" class="d-block w-100" alt="carou2">
              </div>

              <div class="carousel-item" data-bs-interval="3000">
                <img src="/web-final/assets/images/Carousel/doraemon.jpg" width="800" height="500" class="d-block w-100" alt="carou3">
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
        <!-- End main -->

        <h1>This is THEATERS page</h1>

        <!-- Footer -->
        <div class="footer">     
           <p> Copyright &copy; 2024 TDTU</p>
        </div>
        <!-- Footer -->
        
    </div>
</body>
</html>