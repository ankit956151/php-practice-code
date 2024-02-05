<?php  
include '_dbconnect.php';
// require '_dbconnect.php';



$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// find the no of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " Record found on a database<br>";

while($row = mysqli_fetch_assoc($result)){
    // echo var_dump($row);
    echo $row['sno'] . ". Hello " . $row['name'] . " Welcome to " . $row['dest'];
    echo "<br>";
}
?>