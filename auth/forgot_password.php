<!DOCTYPE html>
<html lang="en">

<?php include '../partials/metadata.php'; ?>

<?php include '../partials/navbar.php'; ?>

<body>
    <div class="container">
        <h2>Reset your password here</h2>
        <br>
        <div id="error-block" style="display: none;">
            <div class="alert alert-danger" id="error-msg"></div>
        </div>
        <form action="../email/forgot_password.php" method="POST" >
            <div class="form-group">
                <label for="email">email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Send Email</button>
        </form>

    </div>

    <script src="../assets/main.js" type="text/javascript"></script>
</body>
</html>