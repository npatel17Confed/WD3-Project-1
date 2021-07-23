<?php include '../partials/db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

<div class="container">
    <div class="row">
        <?php

        $query = "SELECT * FROM ".$_GET['products']."";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_array($result)) {
            echo '<div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <div class="product-imitation"> 
                                <img src="../images/products/'.$row['image'].'" alt='. $row['image'] .' 
                                width=150 height=150/>
                        </div>
                        <div class="product-desc">
                            <span class="product-price">$'. $row['price'] .'</span>
                            <small class="text-muted">Category</small>
                            <a href="#" class="product-name"> '. $row['title'] .'</a>

                            <div class="small m-t-xs">'. $row['description'] .'</div>
                            <div class="m-t text-righ">

                                <a href="./information.php?id='.$row['id'].'&products='.$_GET['products'].'" class="btn btn-xs btn-outline btn-primary">
                                Info
                                <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>'; //these are the fields that you have stored in your database table employee

        }
        ?>
    </div>
</div>

<?php include '../partials/footer.php'; ?>

</html>