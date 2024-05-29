<?php 
    require_once('../resources/film_db.php'); // Ensure this is included to get the get_products function

    $film_available = get_products(); //fetch products here
    $film_upcoming = upcoming_film();
?>
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

        <!-- Now showing start -->
        <?php include '../resources/now_showing.php'?>

        <!-- Carousel -->
        <?php include '../resources/carousel.php'?>

        <!-- Upcomming start -->
        <?php include '../resources/upcoming.php'?>

        <!-- Footer -->
        <div class="footer">     
           <p> Copyright &copy; 2024 TDTU</p>
        </div>
        <!-- Footer -->
</body>
</html>