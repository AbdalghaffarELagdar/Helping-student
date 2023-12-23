<?php
$username=$_REQUEST['username'];
$Password=$_REQUEST['Password'];
$email=$_REQUEST['email'];

if(isset($_POST['submit']))
{
    $host="localhost";
    $user="root";
    $Password= "";
    $db="heping_student"

    $conn=mysqli_connect($host,$user,$Password,$db);

    $insert="insert into login values('$username','$Password','$email')";

    mysqli_query($conn,$insert);

    if ($conn){
        echo("<h1 style='color:green;'> كله تحت السيطره  ");
    }
    else{
        echo("<h1 style='color:red;'> جرب تاني  ");
    }



}




?>