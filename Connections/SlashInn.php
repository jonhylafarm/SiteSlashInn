<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_SlashInn = "localhost";
$database_SlashInn = "slash";
$username_SlashInn = "root";
$password_SlashInn = "root";
$SlashInn = mysql_pconnect($hostname_SlashInn, $username_SlashInn, $password_SlashInn) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_set_charset('utf8');
?>