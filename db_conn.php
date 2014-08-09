<?php
$connect = mysql_connect("mysql17.000webhost.com","a5728438_hys","tarang12");
if(!$connect){
	echo "Error occured while connecting :".mysql_error;
	exit();
}
else
{
	$dbase=mysql_select_db("a5728438_hys");
	if(!$dbase)
	{
		echo "unable to connect to database".mysql_error;
		exit();
	}
}
?>