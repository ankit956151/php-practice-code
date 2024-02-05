<?php
 /* connect to a mysql database
 1. MYsqli extension 
 2. pdo - php dataobject
 */
    //  connecting to the database

    $servername = "localhost";
    $username = "root";
    $password = "";

    // create a connection object

    $conn = mysqli_connect($servername, $username, $password);
    
    //  create a db 
    // die if action was not successful
    if (!$conn) {
        die("Sorry we failed to connect" . mysqli_connect_error());
    } else {
        echo "connection was successful <br>";
    }
    $sql = "CREATE DATABASE DBANKIT2";
    $result = mysqli_query($conn, $sql);

    // check for the database creation success
if($result){
    echo "the database was created successfully <br>";
}
else{
    echo "the database was not created successfully beacuse of this error---->" . mysqli_error($conn);
}
    echo "the result is";
    echo var_dump($result);
    echo "<br>";
?>