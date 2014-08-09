<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration Form</title>
<?php 
/* Connecting to the database */
	include("db_conn.php");
?>

<link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>

<script type="text/javascript">
function MM_validateForm() { //v4.0
  if (document.getElementById){
    var i,p,q,nm,test,num,min,max,errors='',args=MM_validateForm.arguments;
    for (i=0; i<(args.length-2); i+=3) { test=args[i+2]; val=document.getElementById(args[i]);
      if (val) { nm=val.name; if ((val=val.value)!="") {
        if (test.indexOf('isEmail')!=-1) { p=val.indexOf('@');
          if (p<1 || p==(val.length-1)) errors+='- '+nm+' must contain an e-mail address.\n';
        } else if (test!='R') { num = parseFloat(val);
          if (isNaN(val)) errors+='- '+nm+' must contain a number.\n';
          if (test.indexOf('inRange') != -1) { p=test.indexOf(':');
            min=test.substring(8,p); max=test.substring(p+1);
            if (num<min || max<num) errors+='- '+nm+' must contain a number between '+min+' and '+max+'.\n';
      } } } else if (test.charAt(0) == 'R') errors += '- '+nm+' is required.\n'; }
    } if (errors) alert('The following error(s) occurred:\n'+errors);
    document.MM_returnValue = (errors == '');
} }
</script>
<style>
#p{
	color:#FFFFFF;
	font-family: 'Voltaire', sans-serif;	
  
font-size:18px;
}
</style>
</head>

<body>
<br />
<br />
<form action="form_check.php" method="post"  name="registration_form" onsubmit="MM_validateForm('bandname','','R','number','','RinRange3:6','leader','','R','email','','RisEmail','city','','R','contact','','RisNum');return document.MM_returnValue">
<table align="center" cellpadding="0" cellspacing="0"  border="0"  > 

<tr>
<td width="8%" align="center"></td>
<td width="40%" ><p id="p"> Band Name :</p></td>
<td width="52%" ><input name="bandname" type="text" id="bandname"  maxlength="100"/></td>

</tr>



<tr>
<td width="8%" align="left"></td>
<td width="40%" ><p id="p">No.of people :</p></td>
<td width="52%" ><input name="number" type="text" id="number"  maxlength="30"/> </td>

</tr>
<tr>
<td width="8%" align="left"></td>
<td width="40%" ><p id="p" >Team Contact Person :</p></td>
<td width="52%" ><input name="leader" type="text" id="leader"  maxlength="30"/></td>

</tr>
<tr>
<td width="8%" align="left"></td>
<td width="38%" ><p id="p">Email :</p></td>
<td width="52%" ><input name="email" type="text" id="email"  maxlength="30"/></td>

</tr>
<tr>
<td width="8%" align="left"></td>
<td width="40%" ><p id="p">City :</p></td>
<td width="52%" ><input name="city" type="text" id="city"  maxlength="30"/></td>

</tr>
<tr>
<td width="8%" align="left" ></td>
<td width="40%" align="justify"><p id="p">Contact Number :</p></td>
<td width="52%" align="justify"><input name="contact" type="text" id="contact"  maxlength="20"/></td>

</tr>
<tr>
<td width="8%" align="left" ></td>
<td width="40%" align="justify"><p id="p">Video/Audio Links :</p></td>
<td width="52%" align="justify"><input name="avlinks" type="text" id="avlinks"  maxlength="350"/></td>

</tr>
<tr>
<td colspan="3" align="center"><input type="submit" value="Register"  /></td>

</tr>
<tr>
<td colspan="3"></td>

</tr>
</table>
</form>

</body>
</html>