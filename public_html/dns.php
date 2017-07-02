<?php
/* use https://api.ipify.org */
$myfile = fopen("egna.dyndns.org", "w+") or die("Unable to open file!");
fwrite($myfile, $_GET["ip"]);
fclose($myfile);
?> 