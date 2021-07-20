<?php include '../partials/db_conn.php'; ?>

<?php
    if ($_POST) {
        $query =  "INSERT INTO users (fullName, email, password, address, image) VALUES ('".$_POST["fullName"]."', '".$_POST["email"]."', '".md5($_POST["password"])."', '".$_POST["address"]."', 'sample_profile.png')";
        if (mysqli_query($con, $query)) {
            echo 'registration successfullllllllllllllll';
        }
        else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
          }
    }
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<body>
    <div class="container">
        <h2>Registration Form</h2>
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"></div>
        </div>
        <form method="POST" onsubmit="return registrationSubmit()">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <br>
            <div class="form-group">
                <label for="full-name">Full Name</label>
                <input type="text" name="fullName" class="form-control" id="full-name" placeholder="Full name">
            </div>
            <br>
            <div class="form-group">
                <label for="address">Address (Optional)</label>
                <input type="text" name="address" class="form-control" id="address" placeholder="Address">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"  name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <br>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" name="confirmPassword" class="form-control" id="confirm-password" placeholder="Confirm your password">
            </div>
            <br>
            <div class="form-group">
                Upload Image
                <input type="file" name="profile" id="fileToUpload">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p>Already have an account? <a href="./login.php">Login</a></p>
    </div>

    <script src="../assets/main.js" type="text/javascript"></script>
</body>

</html>