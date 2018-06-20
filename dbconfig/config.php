<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gtnl_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

//CONNECTION
if(!$conn)
{
    die("Connection Failed: ".mysqli_connect_error());
}

?>
