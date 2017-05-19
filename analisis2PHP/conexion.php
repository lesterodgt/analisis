<?php
define('DB_SERVER','localhost');
define('DB_NAME','analisis');
define('DB_USER','alucard');
define('DB_PASS','051231');
$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?>
