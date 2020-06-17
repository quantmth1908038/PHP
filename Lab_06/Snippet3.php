<?php
$connect = mysqli_connect("127.0.0.1","root","");
if ($result = mysqli_query($connect,"Select * from Employees"))
{
    $rows = mysqli_num_rows($result);
    echo "The table contains $rows rows.<br>";
}
?>
