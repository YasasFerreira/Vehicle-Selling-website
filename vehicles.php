
<?php

// require 'func/functions.php';
// require 'conf/dbconf.php';

if(isset($_GET['submit'])){
    if(isset($_GET['Price'])){ 
        $price = $_GET['Price'];     
        if(isset($_GET['fuel'])){
            $fuel = $_GET['fuel'];
            filterByPriceAndFuel($fuel,$price,$connect);
            
        }else{
            filterByPrice($_GET['Price'],$connect);
        }
    }elseif(isset($_GET['fuel'])){
        $fuel = $_GET['fuel'];
        filterByFuelType($_GET['fuel'],$connect);
    }else{
        getAllItems($connect);
    }
}   




?>