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
            $query =  "UPDATE users SET fullName = '" . $_POST["fullName"] . "', 
                email='" . $_POST["email"] . "', password = '" . md5($_POST["password"]) . "', 
                address = '" . $_POST["address"] . "', image = '" . $_POST["address"] . "', '$image'
                WHERE id = '" . $_SESSION['id'] . "';";
            if (mysqli_query($con, $query)) {
              echo 'Profile Successfully Updated';
           
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($con);
            }
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
        
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"></div>
        </div>
        <form method="POST" action="./profile.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter email" disabled>
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
     
    </div>
</body>
<?php include '../partials/footer.php'; ?>
</html>