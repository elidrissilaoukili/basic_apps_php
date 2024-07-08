<?php

// $quotes = readfile('readme.txt');
// echo '</br></br>' . $quotes;


$file  = 'readme.txt';

if (file_exists($file)) {
    // // read file
    // echo '</br></br>' . readfile($file);
    // echo '</br></br>';
    // // copy file
    // // copy($file, 'quotes.txt');

    // // absolute path
    // echo realpath($file);

    // echo '</br></br>';

    // // file size
    // echo filesize($file);

    // // rename file 
    // rename($file, 'test.txt');

} else {
    echo 'file does not exist';
}

// mkdir('quotes'); create folder
// rmdir('quotes'); remove folder
