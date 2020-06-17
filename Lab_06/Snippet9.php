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
$sql_delete = ("delete from user_contact where user_id = '101'");

$result = mysqli_query($connect_mysql, $sql_delete);
if ($result)
{
    echo "Records Deleted: $result<br>";
}
else
{
    echo "Records not found in the table<br>";
    printf("Error message: %s\n",mysqli_error($connect_mysql));
}
?>