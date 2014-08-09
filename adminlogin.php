<?php
if( isset($_POST['Submit']) )
{
	
	if(($_POST['uname'] == "hysteria_admin123") && ($_POST['password'] == "hailhysteriaiitr.12"))
	{
	$name=strip_tags(filter_var(mysql_real_escape_string($_POST['uname']),FILTER_SANITIZE_STRING));
	$time=time()+24*3600;
setcookie("uname",$name,$time);

 echo "<script type='text/javascript'>setTimeout(\"window.location = 'admin.php'\",0);</script>";
}
else
{
echo "<h2 align=\"right\">Wrong Login Details</h2>";	
}
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>AdminHysteria12</title>
</head>


<body>
<form name="adminlogin" action="adminlogin.php" method="post">
Username:<input type="text" name="uname" maxlength="20"  />
<br/>
password:<input type="password" name="password" maxlength="20" />
<input type="submit" name="Submit" value="Login"  />
</form>



</body>
</html>