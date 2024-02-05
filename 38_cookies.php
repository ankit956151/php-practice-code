<?php
echo "Welcome to the word of cookies<br>";

// cookies | Session

// Syntex to set a cookie
setcookie("category", "books", time() + 86400, "/");
echo "The cookie is set";

?>