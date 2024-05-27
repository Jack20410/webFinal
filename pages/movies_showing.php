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

        <h1>Showing all the current movies and upcoming movies</h1>

        <!-- Footer -->
        <div class="footer">     
           <p> Copyright &copy; 2024 TDTU</p>
        </div>
        <!-- Footer -->
</body>
</html>