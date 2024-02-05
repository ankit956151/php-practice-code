<?php

// wat is session?
// use to manage information across diffrent pages

// vrify the user login info 
session_start();

$_SESSION['username'] = "Ankit";
$_SESSION['favcat'] = "books";

echo "We have saved your session";
?>