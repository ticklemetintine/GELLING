<?php

	$connect=mysql_connect("localhost", "root", "") 
	or die("Request Timed Out!". mysql_error());
	
	mysql_select_db("library",$connect); 

?>