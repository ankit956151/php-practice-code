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

$sql = "DELETE FROM `phptrip` WHERE `dest` = 'Russia' Limit 1";
$result = mysqli_query($conn, $sql);

// affected rows
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff <br>";
if($result){
    echo "Deleted Successfully !";
}else{
    $err = mysqli_error($conn);
    echo "Not Deleted Successfully due to this error====>$err";
}


?>