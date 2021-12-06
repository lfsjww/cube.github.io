<?php
$iipp = $_SERVER["REMOTE_ADDR"];
$handle=fopen("ip.txt","a");
fwrite($handle,"
$iipp");
fclose($handle);?>