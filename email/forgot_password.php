<?php

include '../partials/db_conn.php';

$email = '';
if (isset($_POST["email"])) {
    $email = $_POST["email"];
} else {
    header('location: ../auth/login.php');
    die;
}

$query = "SELECT password FROM users WHERE email = '$email' LIMIT 1";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);

if (isset($row["password"])) {

    $to = $email;
    $password = $row["password"];
    $subject = "Reset Your Password - Comber Drug Store";

    $message = "
    <html>
    <head>
    <title>HTML email</title>
    </head>
    <body>
    <p>Click on the link below to reset your password.</p>
    <a href='http://localhost:8080/webdesign/WD3-Project-1/auth/reset_password.php?email=$email&code=$password' class='btn btn-primary'>Reset Password</a>
    </body>
    </html>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // More headers
    $headers .= 'From: <rpalkar440@gmail.com>' . "\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo 'An email containing the reset password link has been sent to your email. Login <a href="../auth/login.php">here.</a>';
    } else {
        echo 'Error sending the email.Try again <a href="../auth/forgot_password.php">here.</a>';
    }
} else {
    echo "user does not exist in the db.";
}
?>