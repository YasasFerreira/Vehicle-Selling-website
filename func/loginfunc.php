<?php
session_start();
require_once 'conf/dbconf.php';
if(isset($_POST['submit'])){
    $uname = $_POST['username'];
    $pword = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pword'";

    $result = mysqli_query($connect,$sql);

    if(mysqli_num_rows($result)==1){
        
        $row = mysqli_fetch_assoc($result);
        $_SESSION['fname'] = $row['full_name'];
        $_SESSION['id'] = $row['user_id'];
        header('location:index.php');

        

    }else{
        echo "
        <div class='alert'>
            Invalid Username/Password!!
        </div>";
    }
}


?>