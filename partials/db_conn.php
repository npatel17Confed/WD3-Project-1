<?php
    $con = mysqli_connect("localhost", "root", "", "wd3-project");

    if(mysqli_connect_errno()) {
        echo 'DB Connection Error';
    }
?>