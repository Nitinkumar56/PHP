<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>

<?php include"header.php" ?>
<?php include"sidebar.php" ?>
<?php include"config.php" ?>
<div class="Mid-panel">
			<div class="messagePanel">
            <div class="clear"></div>
            <?php $de=@$_GET['rog']; ?>
      <div style="margin: 0 auto; width: 250px;">
  <center> <h2 style="color:#FFFFFF">Forgot Password</h2> </center>  
 <center> <form name="forgot" method="post" action="forgotpdb.php" style="font-size:13px">
  <table style="padding-top:80px">
  <tr><td style="padding-right:10px">Your Email-Id</td>
  <td><input type="text" name="email" placeholder="Insert Email_Id" /></td></tr>
  <tr><td colspan="2" align="center"><input type="submit" name="s" value="Submit" style="border:none; padding:5px; color:#FFFFFF;   background-color:#996600; margin-top:10px"  /></td></tr>

</table>


       
       
       <div class="clear"></div>
       </form></center>
       </div> 
       
           </div>
             </div>
<div class="clear"></div>
<?php include"footer.php" ?>


</body>
</html>
