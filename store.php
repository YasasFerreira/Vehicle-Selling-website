<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <title>vehicle Store</title>
</head>
<body>
    <?php include 'func/header.php'; ?>

    <section>
        <div class="row align-items-start">
        <div class="col-4">
        <?php
          //include 'filter.php';
        ?>
        </div>
        <div class="col-8">
        <?php
          require_once 'func/functions.php';

            getAllItems();
        ?>

        </div>
      </div>
        
 

    </section>

   



  
    
</body>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</html>