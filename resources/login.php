<?php
session_start();
include 'connection.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "select * from users where email = '$email' and password = '$password'";
    
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_array($result);
        $_SESSION['name'] = $row['name'];
        $_SESSION['email'] = $row['email'];
        header("location:index.php");
    } else{
        $_SESSION['email'] = $email;
        $_SESSION['login_err_msg'] = "Your email or password are incorrect";    
        header("location:index.php");
    }
}
?>