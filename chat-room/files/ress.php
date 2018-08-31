	<?php
		require('connect.php');
		$name ="";
		$email ="";
	if (isset($_POST['submit'])){
        $name = $_POST['fname'];
		$email = $_POST['email'];
		$pwd = $_POST['pass'];
     $match_0= "select * from login  WHERE name = '$name'";
     $match_1="select * from login  WHERE email = '$email'";
     $exe_0 = mysqli_query($con, $match_0) or die(mysqli_error($con));
     $exe_1 = mysqli_query($con, $match_1) or die(mysqli_error($con));
     $count_0 = mysqli_num_rows($exe_0);
     $count_1 = mysqli_num_rows($exe_1);

     if($count_0 > 0 ){
     	$n_error = "sorry! Username already taken";
     }
     else if($count_1 > 0){
     	$e_error = "sorry! email already exist";
     }
     else{
        $ins = "insert into login(name, email, pwd)"." values ('$name','$email','$pwd')";
		mysqli_query($con, $ins);
		
			echo"<script> alert('your information is posted')</script>";
		    
	}
	                    }
	?>