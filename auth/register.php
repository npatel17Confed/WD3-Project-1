<?php include '../partials/db_conn.php'; ?>

<?php

if (isset($_SESSION['id'])) {
    header('location: ../main/index.php');
}

if ($_POST) {
    $image = $_FILES['image']['name']; #will get name of the file which the user uploads
    if ($image != "") {
        $tmp_image = $_FILES['image']['tmp_name'];
        $imageSize = $_FILES['image']['size'];
        $imageExt = explode('.', $image);
        $image = $_POST['email'] . '.' . $imageExt[count($imageExt) - 1];
        if (move_uploaded_file($tmp_image, "../images/$image")) {
            $query =  "INSERT INTO users (fullName, email, password, address, image) VALUES ('" . $_POST["fullName"] . "', '" . $_POST["email"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["address"] . "', '$image');";
            if (mysqli_query($con, $query)) {
                $_SESSION["id"] = $row['id'];
                header("location: ../main/index.php");
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
            }
        }
    } else {
        $image = 'sample_profile.png';
        $query =  "INSERT INTO users (fullName, email, password, address, image) VALUES ('" . $_POST["fullName"] . "', '" . $_POST["email"] . "', '" . md5($_POST["password"]) . "', '" . $_POST["address"] . "', '$image');";
        if (mysqli_query($con, $query)) {
            $_SESSION["id"] = $row['id'];
            header("location: ../main/index.php");
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

<body>
    <div class="container">
        <h2>Registration Form</h2>
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"></div>
        </div>
        <form method="POST" onsubmit="return registrationSubmit()" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter email">
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
                <input type="password" name="password" class="form-control" id="password" placeholder="Password">
            </div>
            <br>
            <div class="form-group">
                <label for="confirm-password">Confirm Password</label>
                <input type="password" name="confirmPassword" class="form-control" id="confirm-password" placeholder="Confirm your password">
            </div>
            <br>
            <div class="form-group">
                Upload Image
                <input type="file" name="image" id="fileToUpload">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p>Already have an account? <a href="./login.php">Login</a></p>
    </div>
</body>
<?php include '../partials/footer.php'; ?>
</html>