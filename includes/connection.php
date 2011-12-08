<?php 
require("settings.php");

$connection=mysql_connect(DB_HOST, DB_USER, DB_PWORD);
if (!$connection)
	{
	die("Database connection failed: " . mysql_error());
	}

$db_select=mysql_select_db(DB_NAME, $connection);
if (!$db_select)
	{
	die("Database selection failed: " . mysql_error());
	}
 ?>