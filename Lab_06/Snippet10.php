<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($server,$username,$password);
if ($connect_mysql)
{
    echo "Connectiom established<br>";
}
else
{
    die("Unable to connect<br>");
}
$mysql_db = mysqli_select_db($connect_mysql,"publications");
if ($mysql_db)
{
    echo "Connected to the database<br>";
}
else
{
    die("Unable to connect to the database<br>");
}
$sql_update = ("Update user_contact set user_name ='David' where user_id ='102'");
$result = mysqli_query($connect_mysql, $sql_update);
if ($result)
{
    echo "Records Updated: $result<br>";
}
else
{
    echo "Unable to update records<br>";
    printf("Error message: %s\n",mysqli_error($connect_mysql));
}
?>