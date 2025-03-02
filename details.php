<?php
    session_start();

    if(isset($_SESSION['fname'])){
        $id = $_GET['id'];
        echo $id;
    }else{
        header("location:login.php");
    }

    
?>