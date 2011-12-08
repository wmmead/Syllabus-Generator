<?php
$val = set_codes();
if(!isset($_SESSION['auth09328']) || $_SESSION['auth09328'] != $val)
{
	if(isset($_POST['login']))
	{
	authenticateperson(mysql_prep($_POST['login']), mysql_prep($_POST['password']), KEY);
	}
}
?>