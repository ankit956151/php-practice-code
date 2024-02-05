<?php

$fptr = fopen("myfile.txt", "r");
// echo $fptr;
if(!$fptr){
    die("Unable to open this file");
}
$content = fread($fptr, filesize("myfile.txt"));
echo $content;
fclose($fptr);
?>