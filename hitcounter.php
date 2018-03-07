<?php

/* counter */

//buka file hitcounter.txt
$datei = fopen(__DIR__."/hitcounter.txt","r");
$count = fgets($datei,1024);
fclose($datei);

//nambah counter hit
$count=$count + 1 ;

function getCount() {
    global $count;
    return $count;
}

// write counter ke file
$datei = fopen(__DIR__."/hitcounter.txt","w");
fwrite($datei, $count);
fclose($datei);

?>