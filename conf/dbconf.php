<?php

    define('DBNAME','vehicle_sales');
    define('SERVERNAME','localhost');
    define('USERNAME','root');
    define('PASSWORD','');



    $connect=mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);

    // echo __DIR__;
    // if($connect){
    //     echo "Connect Successfully";
    // }else{
    //     echo "Not connected";
    // }


?>