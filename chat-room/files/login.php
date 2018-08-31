<?php include('use_chat.php'); ?>

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
<body>
<div class="container" style="margin-top: 50px;">
        <div class="row" style="background-color:lightblue">
            <div class="col-md-12 col-md-offset-12 center">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Login Here!</h3>
                        <?php
                        if(isset($l_error)):?>
                          <span style="color:#D83D5A; font-weight: bold;"> <?php echo "**".$l_error."**";?></span>                    
                           <?php endif ?>
                        
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post" action="login.php">
                            <fieldset>
                                <div class="form-group input-group-lg">
                                    <label for="">Username</label>
                                    <input 
                                        type="text" 
                                        name="name" 
                                        class="form-control" 
                                        placeholder="Username" 
                                        autofocus>
                                </div>
                                <div class="form-group input-group-lg">
                                    <label for="">Password</label>
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                               <b> Not a member? Please SignUp</b>&nbsp;<a href="signup.php"><b>Sign up</b></a><br><br>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" class="btn btn-lg btn-success btn-block" name="login">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
  </html>