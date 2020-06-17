<?php
$connect_mysql = mysqli_connect("127.0.0.1","root","","ebookshop");
$result = mysqli_query($connect_mysql,"select * from books");
while ($row = mysqli_fetch_row($result))
{
    printf("%s (%s)\n", $row[0], $row[1]);
}
?>