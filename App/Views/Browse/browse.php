<?php
require '../App/Views/common/head.php';
require '../App/Views/common/navigation.php';
?>

<h1>BROWSE LISTINGS</h1>

<form action="/browse/searchListings" method="GET">
    <input type="text" name="query" />
    <input type="submit" value="Search" />
</form>


    <?php foreach ($listings as $listing)  {
        $url = "/Listings/index?id=".$listing['vehicleID'];
     ?>
    <div class="card" style="width: 18rem;" method="GET" >
        <img src="../images/<?php echo  $listing['photoLink']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?php echo $vehicles[$listing['vehicleID']]['brand'] . ' ' . $vehicles[$listing['vehicleID']]['model'] ?></h5>
            <p class="card-text"><?php echo 'Price per day : ' . $listing['pricePerDay'] . '€<br>'.
                                            'Pickup : ' . $listing['pickupLocation'] .' <br>'.
                                            'Return : ' . $listing['returnLocation']?></p>
            <a href="<?php echo $url;?>" class="btn btn-primary">More Details</a>
        </div>
    </div>

    <?php
    }
    ?>
