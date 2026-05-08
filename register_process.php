<?php

$host ="localhost";
$user ="root";
$pass ="";
$db ="namratadhakal";

$con =mysqli_connect($host,$user,$pass,$db);



if(!$con){
    echo "failed to connect db";
    die;
}
$fname = $_POST["first_name"];
$lname = $_POST["last_name"];
$email = $_POST["email"];
$password =password_hash($_POST["password"],PASSWORD_DEFAULT);

$res = mysqli_query($con,"insert into register_table(first_name,last_name,email,password) 
values ('$fname','$lname','$email','$password')");
if($res){
    echo "user registration successful";
    header("Location:index.php");
}
else {
    echo "fail to register";
}
