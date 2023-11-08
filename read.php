<?php
#$file = readfile("file.txt");
#echo readfile("file.txt");
#$f ="file.txt";
#$file = fopen($f,"r");
#$processed = fread($file,filesize($f));
$file = fopen("file.txt","r");

while(!feof($file)) {
    echo fgets($file)."<br />";
}


fclose($file);
#echo $processed;
?>