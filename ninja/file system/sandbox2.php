<?php

$file = 'quotes.txt';

// only read file 
$handle = fopen($file, 'r+');

// read the file 
// echo fread($handle, filesize($file));
// echo fread($handle, 112);

// read a sigle line
// echo fgets($handle);

// // read a single character
// echo fgetc($handle);

// writing to a file 
fwrite($handle, "\n Everything cool in this world");
fclose($handle);

// unlink($file); // delete a file
