<?php

    define('DBNAME','fuelapp');
    define('SERVERNAME','localhost');
    define('USERNAME','root');
    define('PASSWORD','');



    $connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
    if($connect){
        echo "Connect Successfully";
    }else{
        echo "Not connected";
    }


?>