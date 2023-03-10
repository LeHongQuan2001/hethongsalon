<?php
    $server ="localhost";
    $use ="root";
    $pass = "";
    $database ="astronomy";
    $conn = mysqli_connect($server,$use,$pass,$database);
    mysqli_query($conn,"set name 'utf8'");
?>