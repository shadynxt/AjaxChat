<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chat APP</title>
</head>

<body>
<?php
	session_start();
	define("LOGGED_IN" , TRUE);
	
	require 'Core.php';
	require 'Chat.php';
	
?>
</body>
</html>