<?php 
    require_once('connection.php');

    function get_products()
    {
        $sql = "select * from films";

        $conn = create_connection();

        $result = $conn ->query($sql);
        $data = array();

        for ($i = 1; $i <= $result->num_rows; $i++){
            $row = $result -> fetch_assoc();
            $data[] = $row;
        }
        return $data;
    }

    $all_products = get_products();
    print_r($all_products);
?>