<?php
session_start();
include 'connection.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];   
    $password = $_POST['password']; 

    mysqli_query($con,"INSERT INTO users(name,email,password) VALUES ('$name','$email','$password')");
    echo"<div class='message'>
            <p>Sign up successfully</p>
            </div><br>";
    header("location:index.php");
}
?>