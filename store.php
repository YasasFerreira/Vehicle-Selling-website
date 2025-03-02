<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>vehicle Store</title>
</head>
<body>
    <?php //include 'func/header.php'; ?>

    <section>
        <div class="row align-items-start">
        <div class="col-4">
        
        </div>
        <div class="col-8">
          <?php
       
           include_once 'func/functions.php';
           require_once 'conf/dbconf.php';

          getAllItems($connect);
        
          
        ?>
        

        </div>
      </div>
        
 

    </section>

   



  
    
</body>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>