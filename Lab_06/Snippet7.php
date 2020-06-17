<?php
$server = "127.0.0.1";
$username = "root";
$password = "";
$connect_mysql = mysqli_connect($server,$username,$password);
if ($connect_mysql)
{
    echo "Connection established.";
}
else
{
    die("Unable to connect");
}
$db = "publications";
$mysql_db = mysqli_select_db($connect_mysql, $db);

if ($mysql_db)
{
    echo "<br><br>Connected to the database.";
}
else
{
    die("Unable to connect to the database");
}
$sql_insert = "insert into user_contact (user_id, user_name, user_email_id) value (101,'John','john#mail.com')";
$result = mysqli_query($connect_mysql, $sql_insert);
if ($result)
{
    echo "<br><br>The records have been added to the table.";
}
else
{
    echo "Unable to insert records.";
    mysqli_error();
}
?>