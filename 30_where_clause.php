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

$sql = "SELECT * FROM `phptrip` WHERE `dest`='bihar'";
$result = mysqli_query($conn, $sql);


// usage of WHERE clause to fetch data from the database 
$num = mysqli_num_rows($result);
echo $num . " Record found on a database<br>";
$no =1;

if($num > 0){
    // we can fetch the data better way using the while loop
    while($row = mysqli_fetch_assoc($result)){
        echo $no . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
        echo "<br>";
        $no = $no+1;
    }
}
// usage of where clause to update data
$sql = "UPDATE `phptrip` SET `name` = 'Rohan' WHERE `sno` = 4";
$result = mysqli_query($conn, $sql);
echo $result;
$aff = mysqli_affected_rows($conn);
echo "Number of affected rows: $aff";
if($result){
    echo "We updated the record successfully";
}else{
    echo "We could no update the record successfully";
}

?>