<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sell</title>
</head>
<body>
    <div class="row" style="padding:2em;margin:2em;">
        <?php 
            include 'func/header.php';
            require_once 'conf/dbconf.php';
            require_once 'func/functions.php';
        ?>
    </div>
    <?php
    session_start();

    if(isset($_SESSION['fname']) && isset($_SESSION['id'])){
        
    }else{
        header("location:login.php");
    }
?>
    <div class="login">
    
        <form action=" " method="POST" enctype="multipart/form-data" style="color: black;margin:2em;padding:2em;">
    
        
        <center><h4>SELL VEHICLE</h4></center><br><br>
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Vehicle Model</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Model " name="model">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Manufacturer Year</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="manufacturer year"  name="year">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Price</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Price " name="price">
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">MIllage</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="millage"  name="millage">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Fuel Type</label>
                <select name="fuel" id="" class="form-select">
                    <option value="None" selected >select fuel type</option>
                    <option value="Petrol" >Petrol</option>
                    <option value="Diesel" >Diesel</option>
                    <option value="Electric" >Electric</option>
                    <option value="Hybrid" >Hybrid</option>
                </select> 
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Transmission</label>
                <select name="transmission" id="" class="form-select">
                    <option value="None" selected  >select fuel type</option>
                    <option value="Automatic" >Automatic</option>
                    <option value="Manual" >Manual</option>
                </select> 
            </div>
        </div>
        <br>
         <div class="row">
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Make</label>
                <select name="make" id="" class="form-select">
                    <option value="None" selected>select fuel type</option>
                    <?php getMakes($connect); ?>
                </select> 
            </div>
            <div class="col">
                <label for="exampleFormControlInput1" class="form-label">Image</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="image">

            </div>
        </div>
        <br>
        <div class="row">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Description" name="description"></textarea>
        </div>
        <br><br>
      
        <div class="d-grid gap-2 col-6 mx-auto">
        <input class="form-control" type="submit" name="submit" style="background-color:#2c3e50;font: bold;color: black;border: 1em;">
        </div>
    
    </form>
    </div>

    <?php
    try {
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['submit']) && isset($_SESSION['id'])){
            $model = $_POST['model'];
            $year = $_POST['year'];
            $price = $_POST['price'];
            $millege = $_POST['millage'];
            $fuel = $_POST['fuel'];
            $description = $_POST['description'];
            $transmission = $_POST['transmission'];
            $make = $_POST['make'];
            $userid = $_SESSION['id'];
            $image = $_FILES['image'];
            $imagename = $_FILES['image']['name'];
            $imagedestination = 'uploads/'.$imagename;
            $imagetmpname = $_FILES['image']['tmp_name'];
            move_uploaded_file($imagetmpname,$imagedestination);
            
            $sql = "INSERT INTO vehicles (seller_id, make_id, model, year, price, mileage, fuel_type, transmission, description, image, status) VALUES
            ($userid,$make, '$model', $year, $price, $millege, '$fuel', '$transmission', '$description', '$imagedestination', 'available')";

            $result = mysqli_query($connect,$sql);
            
            

        }
    }  
        
    } catch (Exception $e) {
        
    }
    
        
    
    
    ?>

    

    


    
</body>
<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>

</html>