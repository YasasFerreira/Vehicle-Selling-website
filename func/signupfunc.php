<?php

    require_once 'conf/dbconf.php';

    if(isset($_POST['submit'])){
        $fname=$_POST['fullname'];
        $uname=$_POST['username'];
        $email = $_POST['email'];
        $phone = $_POST['phoneno'];
        $address = $_POST['address'];
        $pword=$_POST['password'];
        $confpword = $_POST['confirmpassword'];

        if($pword == $confpword){
            $sql1 = "SELECT * FROM Users WHERE username='$uname' AND password = '$pword' ";
            $result = mysqli_query($connect,$sql1);

            if(mysqli_num_rows($result) == 0){
                $sql2 = "INSERT INTO Users (username,password,full_name,email,phone_number,address) VALUES ('$uname','$pword','$fname','$email','$phone','$address')";
                $result = mysqli_query($connect,$sql2);
                header('location:login.php');
            }else{
                echo "
                <div class='alert'>
                    Already created!!
                </div>";

            }
        }else{
            echo "
                <div class='alert'>
                    Already created!!
                </div>";

        }


    }

?>