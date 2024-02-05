<?php

$fptr = fopen("myfile.txt", "r");
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
// echo "<br>";
// echo fgets($fptr);
/*
Reading a file line by line
while($a = fgets($fptr)){
    echo $a;
    echo "<br>";
}
echo "End of the file has been reached";

*/

// Reading a file chractor by charactor
// echo fgetc($fptr);
// while($a = fgets($fptr)){
//     echo $a;
//     // break;
//     echo "<br>";
// }
// echo "End of the file has been reached";

// wite a program which the content of a file until has been encountered.
while($a = fgetc($fptr)){
    echo $a;
    if($a == "."){
        break;
    }
}
fclose($fptr);
?>