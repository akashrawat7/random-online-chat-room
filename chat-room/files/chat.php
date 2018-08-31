<?php
 session_start();
 if(!isset($_SESSION['username'])){
	 header('location:login.php');
 }
 include('mes_if.php');
 require('connect.php');
 ?>

<!DOCTYPE html>
<html>
<head>

<title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body >
<div class="container" style=" background-color: skyblue;">

	<div class="container">
		<?php
         
        $sql = "select * from chat";
	$resl= mysqli_query($con, $sql);
	?>
	
   <label for="comment"></label><b style="text-transform: capitalize; font-size:30px; color:green;"><?php echo $_SESSION['username'];?></b><b style="font-size:30px; color:green;"> --Online</b></label><a class="btn btn-secondary float-right" role="button" href="exit.php">Logout</a>
  <div class="col-md-12"  style="overflow-y:scroll; height:400px;  background-color:white;" >
  	<?php
  	while($row =  mysqli_fetch_assoc($resl)){

  echo "<b>".    $row['name'] .   " :--: </b>   "   .  $row['msg']    ."  ----". $row['date']; 
  echo "<br> <br>";

}
?>

  </div>
</div>
<form method="post" action="chat.php">
<div class="form-group">
  <label for="comment">Enter Message:</label>
  <textarea class="form-control" rows="2" id="comment" placeholder="Type to send message..."  name="message"></textarea>
</div>
<button type="submit" class="btn btn-success" name="msg">send</button>
</div>
</form>

</body>
</html>