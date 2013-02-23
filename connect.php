<?php
	$db_host = 'localhost';
	$db_user = 'root';
	$db_pass = '';
	$db_name = 'hotline';
	$connect = mysql_connect ($db_host, $db_user, $db_pass);
  if (!$connect) {
    echo "Ошибка подключения к базе данных";
    exit;
  }
  mysql_select_db($db_name);
	mysql_query("SET NAMES utf8", $connect);
