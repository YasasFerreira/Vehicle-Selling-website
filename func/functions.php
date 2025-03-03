<?php
    
    function displayItems($connect,$sql){    
        
        $result=mysqli_query($connect,$sql); 
        
        $numrows = mysqli_num_rows($result);
        echo '<div class="row">';
        for ($i=0;$i<$numrows;$i++){
            $row = mysqli_fetch_assoc($result);
            
            echo '
            <div class="card float-start" style="width: 255px;">
                <img class="card-img-top img-thumbnail" src="'.$row["image"].'" class="card-img-top" alt="" height="3em">
                <div class="card-body" style="font-size:13pt;">
                    <h5 class="card-text">'.$row["model"].'</h5>
                    <p class="card-text" style="font-size:12pt;">Price:$'.$row["price"].'</p>
                    <p class="card-text" style="font-size:12pt;">'.$row["description"].'</p>
                    <p class="card-text" style="font-size:12pt;">Fuel Type:'.$row["fuel_type"].'</p>
                    
                    <p class="card-text" style="font-size:11.3pt;">Transmission:'.$row["transmission"].'</p>
                    <p class="card-text" style="font-size:12pt;">Status:'.$row["status"].'</p>
                    
                    <form action="" method="get">
                        <a href="details.php?id='.$row['vehicle_id'].'" class="btn btn-secondary">BUY NOW</a>
                    </form>
                    
                </div>
            </div>';
        }
        echo "</div>";
    }

    function getAllItems($connect){
        $sql = "SELECT * FROM vehicles";
        displayItems($connect,$sql);
    }

    function getTop($connect){
        $sql = "SELECT * FROM vehicles ORDER BY price DESC LIMIT 10  ";
        displayItems($connect,$sql);
        
    }

    function filterByPrice($value,$connect){
        switch($value){
            case "1":
                $sql = "SELECT * FROM vehicles WHERE price BETWEEN 10000 AND 25000";
                break;
            case "2":
                $sql = "SELECT * FROM vehicles WHERE price BETWEEN 25000 AND 50000";
                break;
            case "3":
                $sql = "SELECT * FROM vehicles WHERE price BETWEEN 50000 AND 75000";
                break;
            case "4":
                $sql = "SELECT * FROM vehicles WHERE price BETWEEN 75000 AND 100000";
                break;
            case "5":
                $sql = "SELECT * FROM vehicles WHERE price >100000";
                break;
            // case "0":
            //     $sql = "SELECT * FROM vehicles";
            //     break;

        }
        displayItems($connect,$sql);
    } 

    function getMakes($connect){
       
        $sql = "SELECT * FROM make";
        $result = mysqli_query($connect,$sql);

        $numrows=mysqli_num_rows($result);
        
        for($i=0;$i<$numrows;$i++){
            $row = mysqli_fetch_assoc($result);
            echo "<option value='".($i+1)."'>".$row['make_name']."</option>";
        }

    }

    function filterByMake($value,$connect){
        switch ($value){
            // case 'M0':
            //     $sql = "SELECT * FROM vehicles";
            //     break;
            case 'M1':
                $sql = "SELECT * FROM vehicles WHERE make_id = 1";
                break;
        }
        displayItems($connect,$sql);
    }

    function filterByFuelType($value,$connect){
        
            $sql="SELECT * FROM vehicles WHERE fuel_type = '$value'";
            displayItems($connect,$sql);

         
    }

   function filterByPriceAndFuel($fuel,$price,$connect){
        switch($price){
                case "1":
                    $sql = "SELECT * FROM vehicles WHERE price BETWEEN 10000 AND 25000 AND fuel_type='$fuel'";
                    break;
                case "2":
                    $sql = "SELECT * FROM vehicles WHERE price BETWEEN 25000 AND 50000 AND fuel_type='$fuel'";
                    break;
                case "3":
                    $sql = "SELECT * FROM vehicles WHERE price BETWEEN 50000 AND 75000 AND fuel_type='$fuel'";
                    break;
                case "4":
                    $sql = "SELECT * FROM vehicles WHERE price BETWEEN 75000 AND 100000 AND fuel_type='$fuel'";
                    break;
                case "5":
                    $sql = "SELECT * FROM vehicles WHERE price >100000 AND fuel_type='$fuel'";
                    break;
            }
            displayItems($connect,$sql);
            
   }

   function getVehicleDetails($id,$connect){
        $sql1 = "SELECT * FROM vehicles WHERE vehicle_id = $id ";
        $result1 = mysqli_query($connect,$sql1);
        $row1 = mysqli_fetch_assoc($result1);

        $sellerid = $row1['seller_id'];
        $sql2 = "SELECT * FROM users WHERE user_id = $sellerid";
        $result2 = mysqli_query($connect,$sql2);
        $row2 = mysqli_fetch_assoc($result2);

        echo '

            <div class="row">
                <div class="col" style = "padding:3em ; margin:3em;">
                <div class="card float-start">
                <img class="card-img-top img-thumbnail" src="'.$row1["image"].'" class="card-img-top" alt="" height="3em">
                <div class="card-body" style="font-size:13pt;">
                    <h5 class="card-text">'.$row1["model"].'</h5>
                    <p class="card-text" style="font-size:12pt;">Price:$'.$row1["price"].'</p>
                    <p class="card-text" style="font-size:12pt;">'.$row1["description"].'</p>
                    <p class="card-text" style="font-size:12pt;">Fuel Type:'.$row1["fuel_type"].'</p>
                    <p class="card-text" style="font-size:11.3pt;">Transmission:'.$row1["transmission"].'</p>
                    <p class="card-text" style="font-size:12pt;">Status:'.$row1["status"].'</p>
                    
                    
                    
                </div>
            </div>
                
                </div>
                <div class="col" style = "padding:3em;margin:3em">
                    <div class="card float-start" style="width:18em;">
                    <img class="card-img-top img-thumbnail" src="images/user.png" class="card-img-top" alt="" height="3em">
                        <div class="card-body" style="font-size:13pt;">
                            <h5 class="card-text">'.$row2["full_name"].'</h5>
                            <p class="card-text" style="font-size:12pt;">Conatact no : '.$row2["phone_number"].'</p>
                            <p class="card-text" style="font-size:12pt;">Email : '.$row2["email"].'</p>
                            <p class="card-text" style="font-size:12pt;">Location:'.$row2["address"].'</p>
                    
                </div>
                
                </div>

            </div>
        
        
        ';

   }
?>