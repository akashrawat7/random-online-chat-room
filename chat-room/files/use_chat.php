<?php
session_start();
 require("connect.php");
 ?>
 <?php
             
     if(isset($_POST["login"])){
     	$name = $_POST["name"];
     	$password = $_POST["password"]; 
        $query = "select * from login where name = '$name' and pwd = '$password'";
        $sql = mysqli_query($con, $query) or die(mysqli_error($con));;
        $match = mysqli_num_rows($sql);
        if($match==1){
        	
        	$_SESSION["username"] = $name;
        	header('location:chat.php');

        }
        else{
        	$l_error = "Invalid Username and Password";
        }

     }