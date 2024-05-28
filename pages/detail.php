<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../resources/head.php'?>
    <link rel="stylesheet" type="text/css" href="/webFinal/resources/css/main.css">
</head>
<body>
        <!-- Header start -->
        <?php include '../resources/header.php'?>
    
        <!-- Menu start -->
        <?php include '../resources/menu.php'?>

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
                    <img src="/webFinal/assets/images/Poster/vay-ham.png" alt="" >

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
                <iframe width="560" height="315" src="https://www.youtube.com/embed/bNhiMWPHJ2Y?si=41lXfyNHExmceShY" 
                title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
            <!-- End trailer -->

            </div>

            <!-- End product detail -->

        </div>

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

        <!-- End main -->

        <!-- Footer -->
        <div class="footer">     
           <p> Copyright &copy; 2024 TDTU</p>
        </div>
        <!-- Footer -->
        
    </div>
</body>
</html>