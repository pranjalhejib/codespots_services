<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "codespots_data";

$con = mysqli_connect($servername, $username, $password, $database);

if($con){
    header('location: index.php');
}else{
    echo "No Connection";
}

mysqli_select_db($con, $database);

$user = $_POST['user'];
$email = $_POST['email'];
$mobile =$_POST['mobile'];
$comments = $_POST['comments'];

// $query = "INSERT INTO `userinfodata`(`id`, `user`, `email`, `mobile`, `comments`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]')"

$query = "insert into userinfodata (user, email, mobile, comments) values ('$user','$email','$mobile','$comments')";

mysqli_query($con, $query);


?>