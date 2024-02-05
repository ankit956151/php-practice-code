<?php

// Writing to a file in php
// $fptr = fopen("myfile2.txt", "w");
// fwrite($fptr, "this is the best file on this planet. please dont argue this one.\n");
// fwrite($fptr, "This is another content\n");
// fwrite($fptr, "This is another content");
// fclose($fptr);


// Appending to a file in php
$fptr = fopen("myfile2.txt", "a");
fwrite($fptr, "This is being appended to the file\n");
fclose($fptr);
?>