<?php
session_start();
 require("connect.php");
 ?>
 <?php
             
     if(isset($_POST["login"])){
     	$name = mysql_real_escape_string($con, $_POST["name"]);
     	$password = mysql_real_escape_string($con, $_POST["password"]); 
        $query = "select * from login where name = '$name' and pwd = '$password'";
        $sql = mysqli_query($con, $query) or die(mysqli_error($con));;
        $match = mysqli_num_rows($sql);
        if($match==1){
        	
        	$_SESSION["username"] = uniqid();
        	header('location:chat.php');

        }
        else{
        	$l_error = "Invalid Username and Password";
        }

     }
