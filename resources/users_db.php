<?php
require_once("connection.php");

function login($email, $password) 
{
    $conn = create_connection();
    $sql = "select * from users where email = ? ";
    
    $stm = $conn->prepare($sql);
    $stm->bind_param('s', $email);
    
    if (!$stm->execute()) return false ;
    
    $result = $stm->get_result();
    if ($result->num_rows !== 1) return false ;
    
    $data = $result->fetch_assoc();
    
    $hashed = $data['password'];
    
    return password_verify($password, $hashed);
}

//var_dump(login('jack1010@mail.com','12345677'));

function signup($name, $email, $password, $re_pass){
    $sql = "select count(*) from users where email = ?";
    $conn = create_connection();

    $stm = $conn->prepare($sql);
    $stm ->bind_param("s", $email);
    $stm ->execute();

    $result = $stm ->get_result();
    $exists = $result->fetch_array()[0] === 1;

    if ($exists) {
        return "Email is already exist";
    }

    $hased = password_hash("$password", PASSWORD_DEFAULT);
    $sql = "INSERT INTO users(name, email, password) VALUES (?,?,?)";

    $stm = $conn->prepare($sql);
    $stm->bind_param('sss', $name, $email, $hased); 
    if ($stm->execute()) return true;
    return $stm->error; 
}

//var_dump(signup('tung','tung@mail.com' , '12345677', '12345677'));

?>
