<?php

include('connect.php');

if(isset($_POST['msg'])){
	$send_msg = mysql_real_escape_string($_POST['message']);
	$name = mysql_real_escape_string($_SESSION['username']);

	$sql = "insert into chat(msg, name) values ('$send_msg','$name')";
	$query = mysqli_query($con, $sql);

	header("location:chat.php");
}

?>
