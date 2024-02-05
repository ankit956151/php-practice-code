

<?php
/* connect to a mysql database
 1. MYsqli extension 
 2. pdo - php dataobject
 */
//  connecting to the database

$servername = "localhost";
$username = "root";
$password = "";
$database = "dbankit2";

// create a connection object

$conn = mysqli_connect($servername, $username, $password, $database);

// create a db 
// die if action was not successful
if (!$conn) {
    die("Sorry we failed to connect" . mysqli_connect_error());
} else {
    echo "connection was successful <br>";
}
// create a table in the db
$sql = "CREATE TABLE .`phptrip` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(11) NOT NULL , `dest` VARCHAR(6) NOT NULL , PRIMARY KEY (`sno`))";
$result = mysqli_query($conn, $sql);

// check for the table creation success
if ($result) {
    echo "the table was created successfully <br>";
} else {
    echo "the table was not created successfully beacuse of this error ======>" . mysqli_error($conn);
}
?>