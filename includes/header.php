<?php
	error_reporting(0);
	include('connect.php');
	session_start();
	$_SESSION['uname'] = $_GET['user'];
?>
<!DOCTYPE>
<html>
<head>
	<title>TITLE GOES HERE</title>
	<link href="../includes/css/bootstrap.min.css" rel="stylesheet">
	<link href="../includes/css/styles.css" rel="stylesheet">
    <link href="../includes/css/bootstrap-responsive.css" rel="stylesheet">
</head>