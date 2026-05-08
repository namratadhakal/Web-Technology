<?php 
session_start();



$host = "localhost";
$user ="root";
$password = "";
$db = "namratadhakal";
$con =mysqli_connect($host,$user,$password,$db);
if(!$con){
    die("Error". mysqli_connect_error());
}
echo "database connected";

$username =$_POST["username"];   
$password = $_POST["password"];
$query = "select * from register_table  where email ='$username'";
$result = mysqli_query($con,$query);
$row = mysqli_fetch_assoc($result);
print_r($row);

if(password_verify($password,$row["password"]))
    {

$_SESSION["username"]=$username;
header("Location:dashboard.php");
    }
    else
        {
            header("Location:login.php");
        }
?>