<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbusername = 'ghifari';
$dbpassword = 'kusuma';
$dbname = 'ghifaridb';

$c = new mysqli($dbhost, $dbusername, $dbpassword, $dbname);
if($c->connect_erro){
  ech
