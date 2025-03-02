<?php
    
    function displayItems($connect,$sql){    
        
        $result=mysqli_query($connect,$sql); 
        
        $numrows = mysqli_num_rows($result);
        echo '<div class="row">';
        for ($i=0;$i<$numrows;$i++){
            $row = mysqli_fetch_assoc($result);
            
            echo '
            <div class="card float-start" style="width: 250px;">
                <img class="card-img-top img-thumbnail" src="'.$row["image"].'" class="card-img-top" alt="" height="3em">
                <div class="card-body">
                    <h5 class="card-text">'.$row["model"].'</h5>
                    <p class="card-text">Price:$'.$row["price"].'</p>
                    <p class="card-text">'.$row["description"].'</p>
                    
                    <form action="" method="get">
                    <input type="submit" class="btn btn-secondary" value="Order now" name="submit" >
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
        }
        displayItems($connect,$sql);
    } 

?>