<?php   
echo "Welcome to php with sql for connecting to the database";

/* connect to a mysql database

 1. MYsqli extension 
 2. pdo - php dataobject
 */

//  connecting to the database

$servername = "localhost";
$username = "root";
$password = "";


// create a connection object

$conn = mysqli_connect($servername, $username, $password );

// die if action was not successful
if(!$conn){
    die("Sorry we failed to connect" . mysqli_connect_error());
}else{
    echo "connection was successful";

}
?>