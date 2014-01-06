<?php
	include('../../includes/connect.php');
	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$sid = $_POST['sid'];
	$isbn = $_POST['isbn'];
	$dateIn = $_POST['dateIn'];
	$dateOut = $_POST['dateOut'];
	$user = $_POST['user'];

	mysql_query("INSERT INTO `library`.`logs` (`borrower_sid`, `borrower_fname`, `borrower_lname`, `isbn`, `date_borrowed`, `return_date`, `transacted_by`) VALUES ('$fname', '$lname', '$sid', '$isbn', '$dateIn', '$dateOut', '$user')");

?>

#node-177{
	background: #d9e9f6;
	border-radius: 5px;
	padding: 20px;
}
#node-177 form {
	margin: 0;
	padding: 0;
	width: 555px;
}
#node-177 .webform-component .form-item label {
font-weight: bold;
display: inline-block;
}
#node-177 .form-checkboxes .form-item label {
font-weight: normal;
}
#node-177 .form-checkboxes{width: 600px;}
#node-177 .form-checkboxes .form-item {
	display: inline-block;
	width: 251px;
	vertical-align: top;
	line-height: normal;
}
#node-177 .form-checkboxes .form-item label input[type="checkbox"]{
float: left;
margin-right: 10px;
margin-bottom: 20px;
}
#node-177 .form-checkboxes>.form-item {
margin-top: -20px;
padding-bottom: 20px;
}
#node-177 .form-text{
	float: right;
	height: 30px;
	margin-right: 75px;
}
#node-177 .webform-component{
	line-height: 37px;
	padding-bottom: 15px;
}
#node-177 #webform-component-symptoms>.form-item:first-child>label, #node-177 #webform-component-permission>.form-item:first-child>label {
display: none;
}
.node-177 #webform-component-permission .form-item .form-checkboxes .form-item{
	width: 295px;
}
.node-177 #webform-component-permission>.form-item .form-checkboxes{
	line-height: normal;
	margin-bottom: 0px;
	padding-bottom: 0px;
	margin-top: 0px;
}
#node-177 #webform-component-permission>.form-item .form-checkboxes{margin: 0px;}
#node-177 #webform-component-permission>.form-item .form-checkboxes>.form-item, #node-177 .form-checkboxes>#edit-submitted-i-would-like-imupro-to-call-me-to-discuss-my-self-assessment-results-1-wrapper{
	margin-top: 0px;
	width: 100%;
padding: 0px;
}
#node-177 #webform-component-permission .description{
	font-family: arial;
	font-size: 11px;
	font-style: italic;
	line-height: normal;
}
#node-177 #webform-component-permission>.form-item .form-checkboxes>.form-item label{font-weight: bold;}
#node-177 .form-submit {
background: url(http://www.imupro.com.au/files/emai-result-btn.png) no-repeat;
width: 283px;
height: 51px;
border: 0px;
text-indent: -999em;
}
#node-177 .form-submit:hover{
background-position: 0 -51px;
}