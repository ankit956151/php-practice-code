<?php

// start the session and get the data
session_start();
if(isset($_SESSION['username'])){
echo "Welcome " . $_SESSION['username'];
echo "<br> Your favrite category is " . $_SESSION['favcat'];
echo "<br>";
}else{
    echo "Pleases login to continue";
}

?>