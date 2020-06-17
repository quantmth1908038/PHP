<?php
$connect_mysql = mysqli_connect("127.0.0.1","root","","ebookshop");
$result = mysqli_query($connect_mysql,"select * from books");
$rows = $result->num_rows;
echo "The table contains $rows rows.<br>";
mysqli_close($connect_mysql);
echo "The connection to the database has been closed.";
?>