<?php
include '../partials/db_conn.php';

if (isset($_SESSION['id'])) {
    header('location: ../main/index.php');
}

if ($_POST) {
    $email = $_POST['email'];
    $sql = "SELECT * FROM users where email = '" . $_POST['email'] . "' and password = '" . md5($_POST['password']) . "' LIMIT 1;";

    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
    if (isset($row)) {
        session_start();
        $_SESSION["id"] = $row['id'];
        $_SESSION["image"] = $row["image"];
        header("location: ../main/index.php");
    } else {
        echo "Incorrect Credentials.";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"></div>
        </div>
        <form method="POST" onsubmit="return loginSubmit()">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <br>
        <p>Don't have an account? <a href="./register.php">Register</a></p>
        <p>Forgot your password? <a href="./forgot_password.php">Reset</a></p>
    </div>
</body>
<?php include '../partials/footer.php'; ?>
</html>