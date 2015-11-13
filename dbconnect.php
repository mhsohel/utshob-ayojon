<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysql_connect($servername, $username, $password);
$db_selected = mysql_select_db('utsob_ayojon', $conn);
mysql_query('SET CHARACTER SET utf8');
mysql_query("SET SESSION collation_connection ='utf8_general_ci'"); 
?>
