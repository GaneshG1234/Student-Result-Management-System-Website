<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "sw-project";

$conn = mysqli_connect($server, $username,$password,$database);
if(!$conn)
// {
//     echo "Successfully Connected";
// }
{
    die("Error". mysqli_connect_error());
}
?>