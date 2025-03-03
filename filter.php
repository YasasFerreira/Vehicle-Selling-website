Fliter By : 

<br>
<form action="store.php" method="GET">
    <div class="row">
    <label for="" class="form-label">Price</label>
    <select name="Price" id="" class="form-select">
        <option value=""  selected disabled>select price</option>
        <option value="1">$10000-$25000</option>
        <option value="2">$25000-$50000</option>
        <option value="3">$50000-$75000</option>
        <option value="4">$75000-$100000</option>
        <option value="5">$100000+</option>
    </select>
    </div>`

    <div class="row">
        <label for="" class="form-label">Fuel Type</label>
        <select name="fuel" id="" class="form-select">
            <option value="" selected disabled >select fuel type</option>
            <option value="Petrol" >Petrol</option>
            <option value="Diesel" >Diesel</option>
            <option value="Electric" >Electric</option>
            <option value="Hybrid" >Hybrid</option>
        </select> 
    </div>

 
    <br><br><br>
    <div class="row">
        
        <input type="submit" value="SEARCH" name="submit" class="btn btn-secondary">
    </div>
    
</form>