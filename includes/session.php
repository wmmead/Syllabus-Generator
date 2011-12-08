<?php session_start();
if (isset($_GET['logoff']))
{
	session_destroy();
	session_start();
}
?>