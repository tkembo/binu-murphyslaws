<?php
	
	$hostname_mxit_murphyslaws = getenv('DB_HOST');
	$database_mxit_murphyslaws = getenv('DB_NAME');
	$username_mxit_murphyslaws = getenv('DB_USER');
	$password_mxit_murphyslaws = getenv('DB_PASS');
	
	$mxit_murphyslaws = mysql_pconnect($hostname_mxit_murphyslaws, $username_mxit_murphyslaws, $password_mxit_murphyslaws) or trigger_error(mysql_error(),E_USER_ERROR); 
	
?>