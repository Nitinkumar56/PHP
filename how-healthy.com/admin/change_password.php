<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script type="text/javascript">
function func1()
{
if(document.form.np.value!=document.form.rp.value)
{
alert('Password Does Not Match');
return false;
}
}
</script>

</head>
<body>
<?php include"header.php" ?>
<?php include"sidebar.php" ?>
<?php
 session_start();
 if(!isset($_SESSION['id1']))
 {
 header('location:index.php');
 }
 
 ?>
<form name="form" action="chngpswrd_db.php" method="post" >
<div style="height: 250px; margin: 200px auto 0; width: 400px;"><table bgcolor="#CC9966" align="center" style="padding:5px;">
<tr>
<td style="color:#FFFF66;">Enter Previous Password</td>
<td style="padding:5px;"><input type="password" name="ps" placeholder="Previous Password" style="border:none; padding:5px;"/></td>
<tr><td colspan="2" style=" text-align:center"><span style="color:#BB0000;"><?php if(@$_GET['mes']==1)
{
echo 'Enter Correct Password';
} ?></span></td></tr>
</tr>
<tr>
<td style="color:#FFFF66">Enter New Password</td>
<td style="padding:5px;"><input type="password" name="np"  placeholder="New Password" style="border:none; padding:5px;"  /></td>
</tr>
<tr>
<td style="color:#FFFF66">Re-Enter Your Password</td>
<td style="padding:5px;"><input type="password" name="rp" placeholder="Re-Enter Password" style="border:none; padding:5px;"  /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Save" name="save" onclick="return func1();" style="background:#FFFFFF; border-radius:5px; color:#996600; font-weight:bold; padding:4px;" /></td>
</tr>
</table>
</div>
</form>

<?php include"footer.php" ?>
</body>
</html>
