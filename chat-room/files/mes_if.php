<?php

include('connect.php');

if(isset($_POST['msg'])){
	$send_msg = $_POST['message'];
	$name = $_SESSION['username'];

	$sql = "insert into chat(msg, name) values ('$send_msg','$name')";
	$query = mysqli_query($con, $sql);

	header("location:chat.php");

}

?>