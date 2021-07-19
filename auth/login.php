<?php include '../partials/db_conn.php'; ?>

<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<body>
    <div class="container">
        <h2>Login Form</h2>
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"></div>
        </div>
        <form method="POST" onsubmit="loginSubmit(event)">
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <br>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p>Don't have an account? <a href="./register.php">Register</a></p>
    </div>

    <script src="../assets/main.js" type="text/javascript"></script>
</body>

</html>