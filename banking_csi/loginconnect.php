<?php
session_start();

include ("connection.php");
	
	$eid=$_POST["eid"];
	$pword=$_POST["pwd"];
	
	$_SESSION["eid"]=$eid;
	$_SESSION["pword"]=$pword;
	
$sql = "select Email, password from user_details where Email='$eid' && 
password='$pword'";

	$result = mysql_query($sql);
	
	$count=mysql_num_rows($result);
	if($count>0)
		header("location:adlogin.php");
	else
		header("location:index.html");
	
?>