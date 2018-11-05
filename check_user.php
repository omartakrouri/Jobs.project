<?php
require './conn.php';
session_start();
if(isset($_POST['username'])){
    $username=$_POST['username'];
        $password=$_POST['password'];


    $query="select * from users where username='$username' and password='$password'";
    $result= mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row= mysqli_fetch_array($result);
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        header("location:index.php");
    }else{
            header("location:login.php?wrong");

    }
}
