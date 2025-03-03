<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">

    <title>details</title>
</head>
<body>
    <div class = "row">
        <?php include 'func/header.php'; ?>
    </div>
    <?php
    session_start();
    require_once 'conf/dbconf.php';

    if(isset($_SESSION['fname'])){
        $id = $_GET['id'];
        
        require_once 'func/functions.php';
        getVehicleDetails($id,$connect);
    }else{
        header("location:login.php");
    }

    
?>
</body>


</html>

