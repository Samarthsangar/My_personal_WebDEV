<?php 
session_start();
if($_post["send"]){
    $name= $_post["name"];
    $email= $_POST["email"];
    $phone= $_POST["Phone"];
    $company= $_POST["company"];
    $location= $_POST["location"];
    $message= $_POST["message"];

    $host="localhost";
    $user="root";
    $pass="";
    $database= "personal";

    $conn = mysqli_connect($host,$user,$pass,$database);

    $sql = "INSERT INTO table contact(NAME,GMAIL,PHONE,COMPANY,LOCATION,MESSAGE) values ('$name', '$email', '$phone', '$company', '$location', '$message')";
    mysqli_query($conn,$sql);

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MY_CONTACT</title>
    <link href="C:\xampp\htdocs\mypersonal\css\bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="C:\xampp\htdocs\mypersonal\css\samarth.css" type="text/css"/>
</head>
<body class="bg-dark">
    <div class="nav_bar" class="bg-primary">
        <h1 class="log">S<span class="log">s</span></h1>
        <ul class="log">
            <li class="modal-header"><a href="C:\xampp\htdocs\mypersonal\html\samarth.html">HOME</a></li>
            <li class="modal-header"><a href="C:\xampp\htdocs\mypersonal\html\myskill.html">SKILLS</a></li>
        </ul>
    <div>
        <span class="about" style="font-size: 40px; font-weight: lighter;">Contact Me</span><br>
        </div>
    </div>
    <form method="post">
    <div class="form">
        <div class="input-data">
                <input type="text" name="name" required>
                <div class="underline"></div>
                <label>Name</label>
        </div>
        <div class="input-data">
            <input type="text" name="email" required>
            <div class="underline"></div>
            <label>Email</label>
        </div>
        <div class="input-data">
            <input maxlength="10" type="text" name="phone" required>
            <div class="underline"></div>
            <label>Phone Number</label>
        </div>
        <div class="input-data">
            <input type="text" name="company" required>
            <div class="underline"></div>
            <label>company Name</label>
        </div>
        <div class="input-data">
            <input type="text" name="location" required>
            <div class="underline"></div>
            <label>Location</label>
        </div>
        <div class="input-data w-75 pt-lg-1">
            <input type="text" name="message" required>
            <div class="underline"></div>
            <label>Your Message</label>
        </div>
        <div class="for">
            <div class="input-data" >
                <button class="submit-btn" type="submit" name="send" value="submit">
                    <a href="C:\xampp\htdocs\mypersonal\html\breadcrum.html">SUBMIT</a>
                </button>
            </div>
        </div>
    </div>
    </form>
    <div class="for">
        <div class="input-data w-100">
            <span class="futer">Created by Samarth Sangar</span><br>
            <span class="futer" style="font-weight: bold; padding-left: 45%;">@WebDeb</span>
        </div>
    </div>
    <div class="for">
        <div class="input-data col-lg-12" >
        </div>
    </div>
    </body>
</html>