<?php

    function displayItems($sql){
        require_once '../conf/dbconf.php';
        $result=mysqli_query($connect,$sql);

        
        $numrows = mysqli_num_rows($result);
        for ($i=0;$i<$numrows;$i++){
            $row = mysqli_fetch_assoc($result);
            
            echo '
            <div class="card float-start" style="width: 12rem; margin: 5px;padding : 5px;">
                <img class="card-img-top img-thumbnail" src="" class="card-img-top" alt="">
                <div class="card-body">
                    <p class="card-text">Price:</p>
                    <form action="" method="get">
                    
                    <input type="submit" class="btn btn-secondary" >
                    </form>
                    
                </div>
            </div>';

            // if($i%3 == 0){echo "<br>";}
        }
    }

    function getAllItems(){
        $sql = "SELECT * FROM users";
        displayItems($sql);
    }

?>