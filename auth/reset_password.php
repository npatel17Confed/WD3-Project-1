<?php
include '../partials/db_conn.php';
$error = "";

if (isset($_GET["email"]) && isset($_GET["code"])) {
    $email = $_GET['email'];
    $password = $_GET['code'];
    $query = "SELECT * FROM users WHERE email = '$email' and password = '$password' LIMIT 1";
    $result = mysqli_query($con, $query);
    $row = mysqli_fetch_array($result);
    if (!isset($row['id'])) {
        echo 'Link not working. Please try submitting the email again.';
        die;
    }
}

if(isset($_POST['submit'])){
  $New_password = $_POST['password'];
  $New_confirmPassword = $_POST['confirmPassword'];
  $email = $_POST['email'];

  if (strlen($New_password) < 5){
    $error = "Password must be greater than five characters";
  } else if ($New_password !== $New_confirmPassword ){
    $error = "Password does not match!";
  } else {
    $New_password = md5($New_password);
    if (mysqli_query($con, "UPDATE users SET password='$New_password' where email='$email'")){
        header('location: ./login.php');
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
        <h2>Reset your password here</h2>
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"><?php echo $error; ?></div>
        </div>
        <form method="POST" >
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" value="<?php echo $_GET['email']; ?>" name="email" readonly>
            </div>
            <div class="form-group">
                <label for="password">New Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <br>
            <div class="form-group">
                <label for="confirmPassword">Confirm New Password</label>
                <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" placeholder="Confirm Password">
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

    <script src="../assets/main.js" type="text/javascript"></script>
</body>
</html>