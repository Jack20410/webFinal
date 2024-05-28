<?php
require_once('connection.php');

function get_products() 
{
    $film_available_query = "SELECT * FROM film_available";
    $conn = create_connection();
    $result = $conn->query($film_available_query);
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $conn->close();
    return $data;
}

function upcoming_film()
{
    $film_upcoming_query = "SELECT * FROM film_upcoming";
    $conn = create_connection();
    $result = $conn->query($film_upcoming_query);
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $conn->close();
    return $data;
}
?>