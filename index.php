<?php
$osname = $_POST['ali'];
$myfile = fopen("ip.txt", "w");
fwrite($myfile, $osname);
fclose($myfile);
$osname = $_POST['mms'];
$myfile = fopen("data.json", "w");
fwrite($myfile, $osname);
fclose($myfile);
