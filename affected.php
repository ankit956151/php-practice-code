<?php 
     $conn = mysqli_connect("localhost", "root", "", "tests") or die("Connection failed");

     $sql = "DELETE FROM `students` WHERE id > 2";
     $result = mysqli_query($conn, $sql) or die("Query Failed");

     echo "Total Rows : " . mysqli_affected_rows($conn);
?>