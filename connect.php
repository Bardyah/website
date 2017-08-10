<?php
$ip_addr = gethostbyname('apsouth1-mysql-instance2.cpip3m9hs2h0.ap-south-1.rds.amazonaws.com'); 
$db_username =  'adminer';
$db_pass =      'adminer123';
$db_name =      'bardyahdb'; 

mysql_connect("$ip_addr","$db_username","$db_pass", TRUE) or die(mysql_error());
mysql_select_db("$db_name") or die("no database by that name");
?>