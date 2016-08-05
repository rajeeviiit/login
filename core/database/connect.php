<?php
$connect_error = 'sorry problems in connection';
mysql_connect('localhst','root','') or die($connect_error);
mysql_select_db('login') or die($connect_error);
?>