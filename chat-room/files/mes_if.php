<?php

include('connect.php');

if(isset($_POST['msg'])){
	$send_msg = mysql_real_escape_string($con, $_POST['message']);
	$name = mysql_real_escape_string($con, $_SESSION['username']);

	$sql = "insert into chat(msg, name) values ('$send_msg','$name')";
	$query = mysqli_query($con, $sql);

	header("location:chat.php");
}

?>
