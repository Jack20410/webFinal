<?php 
    require_once('../resources/film_db.php'); // Ensure this is included to get the get_products function

    $film_available = get_products(); //fetch products here
    $film_upcoming = upcoming_film();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../resources/head.php'?>    
    <link rel="stylesheet" type="text/css" href="/web-final/resources/css/main.css">
</head>
<body>
        <!-- Header start -->
        <?php include '../resources/header.php'?>
    
        <!-- Menu start -->
        <?php include '../resources/menu.php'?>

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
        <?php include '../pages/upcoming.php'?>

        <!-- Footer -->
        <div class="footer">     
           <p> Copyright &copy; 2024 TDTU</p>
        </div>
        <!-- Footer -->
</body>
</html>