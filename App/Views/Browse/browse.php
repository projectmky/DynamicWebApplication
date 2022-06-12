<?php
require '../App/Views/common/head.php';
require '../App/Views/common/navigation.php';
require '../App/Views/common/footer.php';
?>
<!-- 
<h1>BROWSE PAGE, LISTINGS</h1> -->

<!--<ul>-->
<!--    --><?php //foreach ($listing as $listing) 
            ?>
<!--        <h2>--><?php //echo "listing.email"
                    ?>
<!--</h2>-->
<!--</ul>-->


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

<script>
function filter(){



}

</script> -->
<!-- 
<body>

    <h3>Get the right car</h3>
    <br>
    <div>
        <form action="" method="POST">
            <div class="form-check">
                <select class="form-select" aria-label="carType" name="carType" style="width:130px; margin-left: 0px;padding-left:0px;border-left:0px;">
                    <option selected>Type of Car</option>
                    <option value="1">Family</option>
                    <option value="2">City</option>
                    <option value="3">Travel</option>
                </select>
                Price per Day:
                <div class="input-group" style="width:100px; margin-left: 0px;padding-left:0px;border-left:0px; margin-top: 5px;">
                    <div class="input-group-text" style="width:60px; ">Min</div>
                    <input type="number" aria-label="Minimum" class="form-control">
                </div>

                <div class="input-group" style="width:100px; margin-left: 0px;padding-left:0px;border-left:0px;">
                    <div class="input-group-text" style="width:60px; ">Max</div>
                    <input type="number" aria-label="Maximum" class="form-control">
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Parktronic
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        AndroidAuto
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                        Apple CarPlay
                    </label>
                </div>
        </form>
        <button type="button" class="btn btn-info" onClick="getFiltered()">Filter</button>
    </div>
    </div>
</body>-->

<?php

foreach ($listings as $listing) {
    echo "{$listing['ID']} " . "{$listing['description']} " . "{$listing['pricePerDay']}";
    echo "<br>";
    
} 
?>




<h1>BROWSE LISTINGS</h1>

<form action="/browse/searchListings" method="GET">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>


    <?php foreach ($listings as $listing)  {
     ?>
    <div class="card" style="width: 18rem;">
        <img src="../images/<?php echo  $listing['photoLink']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $vehicles[$listing['vehicleID']]['brand'] . ' ' . $vehicles[$listing['vehicleID']]['model'] ?></h5>
            <p class="card-text"><?php echo 'Price per day : ' . $listing['pricePerDay'] . '€<br>'.
                                            'Pickup : ' . $listing['pickupLocation'] .' <br>'.
                                            'Return : ' . $listing['returnLocation']?></p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    <?php
    }
    ?>
