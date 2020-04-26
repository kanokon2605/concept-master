<?php
/*
* connection database
*/
$conn = mysql_connect('localhost', 'root', '') or die('Error connecting to MySQL');
mysql_select_db('car', $conn) or die('Database sysapp does not exist!');
mysql_query("SET character_set_results=utf8");
mysql_query("SET character_set_client=utf8");
mysql_query("SET character_set_connection=utf8");
date_default_timezone_set("Asia/Bangkok");
?>
