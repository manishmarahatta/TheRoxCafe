<?php
/*$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'ratnaz';*/
$host = 'localhost';
$user = 'theroxcafe';
$pass = 'roxcafe_0078';
$db = 'roxcafe_db';

mysql_connect($host,$user,$pass) or die(mysql_error());
mysql_select_db($db)or die(mysql_error());




?>
