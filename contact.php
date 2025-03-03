<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>contactus</title>
</head>
<body>
    <div class="row" style="padding:1.5em;margin:1.5em;">
        <?php include 'func/header.php'; 
        require_once 'conf/dbconf.php'; 
        ?>
    </div>
    
    <div class="login">
    
        <form action=" " method="post" style="color: black;margin:2em;padding:2em;">
    
        <div class="mb-3">
        <center><h5>Contact Us</h5></center>
        <label for="exampleFormControlInput1" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name " name="name">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Enter your email"  name="email">
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Message</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter message" name="message"></textarea>
        </div>	
        <div class="d-grid gap-2 col-6 mx-auto">
        <input class="form-control" type="submit" value="Send Message" name="submit" style="background-color:#2c3e50;font: bold;color: black;border: 1em;">
        </div>
    
    </form>
    </div>

    <?php
    
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $email =$_POST['email'];
            $msg = $_POST['message'];

            $sql = "INSERT INTO contactdetails (name,email,message) VALUES ('$name','$email','$msg')";
            $result = mysqli_query($connect,$sql);
            echo "
                <script>
                    alert('message sent successfully');
                </script>
            ";
        }
    
    ?>

  
    

      
</body>
<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</html>

