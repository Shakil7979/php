<?php
$myfile = fopen("webdictionary.txt", "r") ;
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
?> 
