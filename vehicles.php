
<?php

require_once 'func/functions.php';
require_once 'conf/dbconf.php';

if(isset($_GET['submit'])){
    $price = $_GET['Price'];
    filterByPrice($price,$connect);
    

}else{
    getAllItems($connect);
}


?>