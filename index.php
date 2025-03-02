<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Sellme</title>
</head>
<body>
    <!--Navigation Bar-->
    <?php include 'func/header.php'; ?>

    <!--Home Section-->
    <section class="homesec" id="home" >
    <?php include 'func/home.php'; ?>
    </section>

    <section class="itemsec" id="item">
        <div class="row" style="margin: 1em;padding:1em;">
           <b><center><h3>VEHICLES</h3></center></b>
           <br>
        </div>
        <div class="row">
            <?php include 'func/item.php'; ?>   
            <center>
                 <a href="store.php" class="btn btn-secondary" style="width: 30%; ">SEE MORE>></a>
            </center>    
        </div>    
    </section>

    <section  id="aboutus">
        <br>
        <div class="row">
        <div class="about">
            
                <?php include 'func/about.php'; ?>
            </div>
            
        </div>
    </section>
    
    <section class='foot'>
        
            <?php include_once 'func/footer.php'; ?>

        
    </section>
    
</body>
<script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>