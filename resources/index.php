<?php 
    require_once('../resources/film_db.php'); // Ensure this is included to get the get_products function

    $film_available = get_products(); //fetch products here
    $film_upcoming = upcoming_film();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php'?>
    <link rel="stylesheet" type="text/css" href="./css/main.css">
    <script>
        $(function (){
            <?php if($login_err_msg != "") {?>
                $("#login").click();
            <?php } ?>
        });
    </script>
</head>
<body>
    <!-- Header start -->
    <?php include 'header.php'?>
    
    <!-- Menu start -->
    <?php include 'menu.php'?>

    <!-- Carousel -->
    <?php include 'carousel.php'?>

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