<?php  
$servername = "localhost";
$username = "root";
$password = "";
$database = "dbankit2";

// create a connection object

$conn = mysqli_connect($servername, $username, $password, $database);

//  create a db 
// die if action was not successful
if (!$conn) {
    die("Sorry we failed to connect" . mysqli_connect_error());
} else {
    echo "connection was successful <br>";
}

?>