<?php
ini_set('display_errors',0);
ini_set('display_startup_errors', 0);
error_reporting(0);

$user='ADMIN2';
$pass='0987';
$serv='MATEBOOK14IB\BLEAKESERVER';
$DB='blackchaos';
$dsn = "Driver={SQL Server};
Server=MATEBOOK14IB\BLEAKESERVER;Database=blackchaos;";
$BDacces=odbc_connect($dsn,$user,$pass);
?>