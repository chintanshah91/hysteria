<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$dbh=mysql_connect ("localhost", "root", "") or die('Cannot connect to the database because: ' . mysql_error());
mysql_select_db ("hysteria") or die('Cannot find to the database because: ' . mysql_error());

$sql="insert into registration (bandname,no_of_people,team_leader,email,city,contactnumber,videolink) values (
					'$_POST[bandname]','$_POST[number]','$_POST[leader]',' $_POST[email] ',' $_POST[city] ',' $_POST[contact] ',' $_POST[avlinks]')";
 
$qyer = mysql_query($sql);
if($qyer)
{
?>
<p style="font-family:'Courier New', Courier, monospace; font-size:18px; color:#FFF" > Registration successful!
<br />
</a></p>
<?php } else { echo mysql_error();}?>
</body>
</html>