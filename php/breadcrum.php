<?php 
session_start();
if($_post["send"]){
    $name= $_post["name"];
    $email= $_POST["email"];
    $age= $_POST["age"];
    $location= $_POST["location"];
    $rate= $_POST["Rate"];
    $message= $_POST["message"];

    $host="localhost";
    $user="root";
    $pass="";
    $database= "personal";

    $conn = mysqli_connect($host,$user,$pass,$database);

    $sql = "INSERT INTO table message(NAME,GMAIL,AGE,LOCATION,RATE,MESSAGE) values ('$name', $email','$age','$location','$rate','$message')";
    mysqli_query($conn,$sql);

}
?>