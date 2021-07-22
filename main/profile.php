<?php include '../partials/db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

<?php
$query = "SELECT * FROM users WHERE id = " . $_SESSION['id'] . " LIMIT 1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
?>

<body>
    <br>
    <div class="container">
        <div class="main-body">
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src="<?php echo '../images/' . $row['image'] ?>" alt="Admin" class="rounded-circle" width="150" height="150">
                                <div class="mt-3">
                                    <h4><?php echo $row['fullName'] ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $row['fullName'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $row['email'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $row['address'] ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Profile Created At</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <?php echo $row['date'] ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <a href='./updateProfile.php'>Update Profile</a>
            </div>
        </div>
    </div>
</body>

<?php include '../partials/footer.php'; ?>

</html>