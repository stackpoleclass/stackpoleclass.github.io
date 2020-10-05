<?php

// Set the location to redirect the page
header ('Location: http://www.facebook.com');

// Open the text file in writing mode
$file = fopen("log.txt", "a");

$temp = $_SERVER['REMOTE_ADDR'];

fwrite($file, $temp);

fwrite($file, "\r\n");
fclose($file);
exit;
?>
