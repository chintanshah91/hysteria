<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>admin</title>
</head>
<body background="images/pattern1.jpg">
<?php 

{
	$con=mysql_connect("mysql17.000webhost.com","a5728438_hys","tarang12");
if(!con)
{
echo mysql_error();
}
$sel=mysql_select_db("a5728438_hys",$con);
{
	?>
	<table border="1" cellspacing="0" cellpadding="5"  width="850" align="center">
<tr align="center" style=" font-weight:600 "><td>S.No</td><td>BandName</td><td>No of Participants</td><td>Team Leader</td><td>Email-Id</td><td>City</td><td>Contact No</td><td>Video Links</td></tr>
	<?php
	$result="SELECT * FROM registration";
$query=mysql_query($result);
$s=1;
while($query_array= mysql_fetch_array($query))
{?>
<tr align="center">
<td align="left" ><?php echo $s; ?></td>
<td align="left" ><?php echo $query_array['bandname'];  ?></td>
<td align="left" ><?php echo $query_array['no_of_people'];   ?></td>
<td align="left" ><?php  echo $query_array['team_leader'];    ?></td>
<td align="left" ><?php  echo $query_array['email'];  ?></td>
<td align="left" ><?php echo $query_array['city'];   ?></td>
<td align="left" ><?php echo $query_array['contactnumber'];  ?></td>
<td align="left" > <?php echo $query_array['videolink'];  ?>  </td>

<?php
$s++;}


?>
</table>

<form action="admin.php" method="post" id="log_out">
<input type="submit" value="logout" name="logout" />
</form>
<?php }



if(isset($_POST['logout']))
{
	
	echo "<script type='text/javascript'>setTimeout(\"window.location = 'logout.php'\",0);</script>";	
	
}
}
?>
</body>
</html>