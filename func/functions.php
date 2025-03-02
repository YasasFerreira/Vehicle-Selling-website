<?php
    
    function displayItems($connect,$sql){    
        
        $result=mysqli_query($connect,$sql); 
        
        $numrows = mysqli_num_rows($result);
        for ($i=0;$i<$numrows;$i++){
            $row = mysqli_fetch_assoc($result);
            
            echo '
            <div class="card float-start" style="width: 20rem; marging:10px;padding:10px;">
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
    }

    function getAllItems($connect){
        $sql = "SELECT * FROM vehicles";
        displayItems($connect,$sql);
    }

    function getTop($connect){
        $sql = "SELECT * FROM vehicles ORDER BY price DESC LIMIT 8 ";
        displayItems($connect,$sql);
        
    }

?>