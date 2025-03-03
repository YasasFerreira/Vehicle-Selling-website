<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div class="row" style="padding-bottom: 5em;">
        <?php include 'func/header.php'; ?>
    </div>
    <div>
        <div class="login">
            
            <form id="loginForm" action="" method="post" style="color: black;margin:2em;padding:2em;">
                <h3>Login</h3> 
                <br>
                <div >
                    <label class="lb" for="username">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Enter your email" required/>
                </div>
                <br>
                <div>
                    <label for="password">Password</label>
                    <input type="password" class="form-control"  name="password" id="pword" placeholder="Enter your password" required/>
                </div>
                <br>

                <div class="d-grid gap-2 col-4 mx-auto">
                    <input type="submit" name="submit" value="LOGIN" class=" btn btn-secondary">
                </div>
                <br><center><label class="lb" for="signup"><a href="">Forgot Password | </a><a href="signup.php">create a account</a></label></center>
                

            </form>
        
        	<?php include_once 'func/loginfunc.php';?>
            <br>
        </div>
    </div>

    
</body>
<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>