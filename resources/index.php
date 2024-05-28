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
    <?php include 'header.php'?>
    
    <!-- Menu start -->
    <?php include 'menu.php'?>

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