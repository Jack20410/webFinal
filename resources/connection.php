<?php
    define('HOST','localhost');
    define('USER','root');
    define('PASS','');
    define('DB_NAME','online_movie_booking');

    function create_connection()
    {
        $conn = new mysqli(HOST, USER, PASS, DB_NAME);

    if ($conn->connect_error) 
    {
        die('Connection Failed: '. $conn->connect_error);
    }
    return $conn;
    }

    $conn = create_connection();
    print_r($conn);
?>