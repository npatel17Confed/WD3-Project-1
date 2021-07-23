<?php include '../partials/db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

<?php
$query = "SELECT * FROM ".$_GET['products']." WHERE id = " . $_GET['id'] . " LIMIT 1";
  
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
?>

<body>
    <br>
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="<?php echo '../images/products/' . $row['image'] ?>" alt="Admin" class="rounded-circle" width="100" height="100">
                            <div class="mt-3">
                                <h4><?php echo $row['title'] ?></h4>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Title</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $row['title'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Description</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $row['description'] ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Price</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo '$ ' . $row['price'] ?>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>
</body>

<?php include '../partials/footer.php'; ?>

</html>