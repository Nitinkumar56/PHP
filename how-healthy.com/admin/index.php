<html>
<head><title>Admin Login</title></head>
<body style="background:url(w8r3u40b.jpg) no-repeat scroll center top transparent; font-family:Arial, Helvetica, sans-serif ">
<?php  $fd=@$_GET['rgt'];?>
<?php
 session_start();
 if(isset($_SESSION['id1']))
 {
 header('location:home.php');
 }
 
 ?>
<form name="admin_login" method="post" action="admin_db.php" style="margin:100px 0 0 250px;">
    
    <table style="padding:10px;"bgcolor="#8dc73f">
     <tr><td colspan="2" align="center" style="color:#FFFFFF; font-weight:bold; font-size:large">Admin LogIn</td></tr>
     
     <tr><td style="font-size:14px; color:#FFFFFF">Admin Name</font></td>
     
     <td><input type="text" name="adm" placeholder="Admin Name" style="padding:5px; font-size:12px; border:none;" /></td></tr>
     
     <tr><td style="font-size:14px; color:#FFFFFF;">Password</font></td>
     
     <td><input type="password" placeholder="Password" name="pas" style="padding:5px; font-size:12px; border:none;"  /></td></tr>
     
     <tr><td colspan="2"><span class="invalid" style="color:#FF0000;"><?php  echo @$_GET['mes'];?></span></td></tr>
     
     <tr><td colspan="2" align="center"><input type="submit"  value="LogIn" style="background-color:#FFFFFF; font-weight:bold; color:#009900; padding:6px; border:none;border-radius:5px;" /></td></tr>
     
     <tr><td align="right" colspan="2" style="font-size:13px"><a href="forgotp.php"><font color="#996633">Forget Password</font></a></td></tr>
     
     </table>
     </form>
     </body>
     </html> 