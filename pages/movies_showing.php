<?php 
    require_once('../resources/film_db.php'); // Ensure this is included to get the get_products function

    $film_available = get_products(); //fetch products here
?>
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

        <!-- Now showing start -->
        <div class="container">
        <div class="home-title">
            <h2 class="text-white" id="home-title">Now showing</h2>
        </div>

        <div class="row now-show-poster">
        <?php 
        if ($film_available) {
            foreach ($film_available as $p) {
                $name = $p['name'];
                $genre = $p['genre'];
                $age = $p['age'];
                $sub = $p['sub'];
                $release_date = $p['release_date'];
                $timeline = $p['timeline'];
                $trailer = $p['trailer'];
                $image = $p['image'];
                ?>
                    <div class="col-3 card">
                        <img class="card-img-top" src="../assets/images/Poster/<?= ($image) ?>" alt="<?= ($name) ?>">
                        <div class="description">
                            <p class="title"><?= ($name) ?></p>
                            <div class="sub-strict">
                                <img class="strict" src="../assets/images/strict/<?= ($age) ?>" alt="<?= ($age) ?>">
                                <p class="sub"><?= ($sub) ?></p>
                            </div>
                            <p class="release"><?= ($release_date) ?> </p>
                            <p class="duration"><?= ($timeline) ?> </p>
                            <button class="text-black buy-ticket" type="submit">Booking</button>
                            <button class="text-black view-trailer">Details</button>
                        </div>
                    </div>
                <?php
            }
        }
        ?>
        </div>
        </div>
    </div>
        <!-- Now showing end -->
        <!-- Upcomming start -->
        <div class="container">
            <div class="home-title">
                <h2 class="text-white" id="home-title">Up comming movies</h2>
            </div>
            <div class=" row now-show-poster">
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
                <div class="col-3 card">
                    <img class="card-img-top" src="/web-final/assets/images/Poster/075b0e5b689fadfdceb9ab5c5ed2c265.png" alt="phim1">
                    <div class="description">
                        <h4 class="title">Tháng tư ngày em đến</h4>
                        <div class="sub-strict">
                            <img class="strict" src="/web-final/assets/images/strict/13.png" alt="13">
                            <p class="sub">Vietsub</p>
                        </div>
                        <p class="duration">108 Minutes</p>
                        <button class="text-black buy-ticket" type="submit">Booking</button>
                        <button class="text-black view-trailer" >Details</button>
                    </div>   
                </div>
            </div>
            
        </div >
        <!-- Upcomming end -->

        <!-- Footer -->
        <div class="footer">     
           <p> Copyright &copy; 2024 TDTU</p>
        </div>
        <!-- Footer -->
</body>
</html>