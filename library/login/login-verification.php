<?php
	include('../../includes/connect.php');
	$username = $_POST['username'];
	$password = $_POST['password'];
	if($username != "" && $password != "" ){
		mysql_query("select * from users where `username` = '$username' && `password` = '$password'");
		echo mysql_affected_rows();
		if(mysql_affected_rows() == 1){
			header("location: ../home.php?user=$username");
		}else{
			header("location: ../index.php?err=2");
		}
	}else{
		header("location: ../index.php?err=1");
	}

?>