<?php
$connect_mysql = mysqli_connect('127.0.0.1','root','','ebookshop');
$mysqli_db = mysqli_select_db($connect_mysql,"Current");
if (!$mysqli_db)
    die("Connection failed");
else
    echo "Current Database is selected";
?>
