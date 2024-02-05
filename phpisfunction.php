<?php 
     $var = 850;

    echo is_int($var) . "<br>";

    var_dump(is_int($var));
     
    if((is_int($var))){
        echo"<br> $var is Integer.";
    }
    else{
        echo"<br> $var is not an Integer.";
    }
?>