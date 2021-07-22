<?php include '../partials/db_conn.php'; ?>

<?php

if ($_POST) {
    session_start();

    $query =  "UPDATE users SET fullName = '" . $_POST["fullName"] . "', 
            password = '" . md5($_POST["password"]) . "', 
            address = '" . $_POST["address"] . "'
            WHERE id = " . $_SESSION['id'] . ";";
    if (mysqli_query($con, $query)) {
        header("location: ./profile.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

<body>
    <?php

    $result = mysqli_fetch_array(mysqli_query($con, "SELECT * FROM users WHERE id=" . $_SESSION['id'] . " LIMIT 1;"));

    echo '<div class="container">
        
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"></div>
        </div>
        <form method="POST" onsubmit="return registrationSubmit()" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email" 
                value="' . $result['email'] . '" readonly>
            </div>
            <br>
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" name="fullName" class="form-control" id="full-name" placeholder="Full name"
                value="' . $result['fullName'] . '">
            </div>
            <br>
            <div class="form-group">
                <label for="address">Address (Optional)</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address"
                value="' . $result['address'] . '">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <br>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" name="confirmPassword" class="form-control" id="confirm-password" placeholder="Confirm your password">
            </div>
            <br>
          
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
     
    </div>'
    ?>
</body>
<?php include '../partials/footer.php'; ?>

</html>