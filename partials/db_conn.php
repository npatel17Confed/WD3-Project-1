<?php
    $con = mysqli_connect("localhost", "root", "", "wd3-project-1");

    if(mysqli_connect_errno()) {
        echo 'DB Connection Error';
    }
?>