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

$name = "Vikarant";
$destination = "Russia";

// sql query to be executed


$sql = "INSERT INTO `phptrip` (`name`, `dest`) VALUES 
('$name', '$destination')"; 

$result = mysqli_query($conn, $sql);

// add a new trip to the trip table in the database
if ($result) {
    echo "The record has been inserted successfully! <br>";
} else {
    echo "The record was not inserted successfully beacuse of this error ======>" . mysqli_error($conn);
}

?>