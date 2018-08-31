<?php include('ress.php');
error_reporting(0); ?>
<!DOCTYPE html>
<html>
<head>

<title>chat-room</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>

</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=email], input[type=password] {
    width: 50%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=email]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  background-color:darkred;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
    margin-top: 30px; 
        background-color: lightgreen;
        color: #D83D5A;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

.err span{
	width:80%;
	height:35px;
    font-size: 1.1em;
    color:#D83D5A;
}

 .err input{
 	border:1px solid #D83D5A ;
 }


/* Change styles for cancel button and signup button on extra small screens */
@media screen  {
    . .signupbtn {
       width: 50%;
    }
}
</style>
<body>

<form action="signup.php" method="post" style="border:1px solid #ccc">
  <div class="container">
    <h1 style="color:black;">Sign Up Here!!</h1>
    <hr>
     <?php if(isset($n_error)):?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    
    	<span> <?php echo "**".$n_error."**";?></span>
    <?php endif ?>
    <div
    <?php if(isset($n_error)):?>
    	class="err" 
    <?php endif ?>
     >
     
    <label for="Name"><b style="color:black;">Name</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    <input type="text" placeholder="Enter Name" autocomplete="off" name="fname" value = "<?php echo $name; ?>"required>
</div>
 <?php if(isset($e_error)):?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
    	<span> <?php echo "**".$e_error."**";?></span>
    <?php endif ?>
<div
 <?php if(isset($e_error)):?>
    	class="err" 
    <?php endif ?>
>

    <label for="email"><b style="color:black;">Email</b></label> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   
    <input type="email" placeholder="Enter Email"  autocomplete="off" name="email" value= "<?php echo $email; ?>" required>
</div>
    <label for="psw"><b style="color:black;">Password</b></label>&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="password" placeholder="Enter Password"  autocomplete="off" name="pass" required>
    <div class="clearfix">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    	<b style="color:black;">Already a member? Login to continue<b>&nbsp;<a href="login.php">Login</a><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <button type="submit" class="signupbtn" name="submit">Sign Up</button>
    </div>
  </div>
</form>
</html>