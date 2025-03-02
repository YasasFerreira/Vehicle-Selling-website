<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sell</title>
</head>
<body>
    <?php
    session_start();

    if(isset($_SESSION['fname'])){
        
    }else{
        header("location:login.php");
    }

    
?>
    


    <section id="footer">
        <div class="foot">
        <?php include 'func/footer.php'; ?>
        </div>
    </section>
</body>
</html>