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
      <div style="margin: 0 auto; width: 250px;">
 <form name="addnew" method="post" action="addnewdb.php">
  <table>
  <tr><td>Username</td>
  <td><input type="text" name="user" placeholder="Username"/></td><td><span><?php if( @$_GET['mes']==1) { echo 'User Already   Exist'; }?></span>  </td></tr>
  
 <tr><td>Address</td>
  <td><textarea name="ad" rows="2" cols="15"></textarea></td></tr>

 <tr><td>Contact Number</td>
 <td><input type="text" name="cn" placeholder="Contact-Number" /></td></tr>
 
 <tr><td>Email-Id</td>
  <td><input type="text" name="em" placeholder="Email-Id" id="email3"   /></td></tr>
 
  <tr><td>Password</td>
   <td><input type="password" name="pass" placeholder="Password"   /></td></tr>
   
    
    <tr><td>Confirm Password</td>
     <td><input type="password" name="cp" placeholder="Confirm-Password" /></td></tr>
    
      <tr><td>Date Of Birth</td>
      <td><select name="date">
      <option value="">-----</option>
	  <?php for($i=31;$i>=1;$i--) { ?>
      <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option><?php } ?></select>
      <select name="month">
      <option value="">-----</option>
      <?php $a=array("Dec","Nov","Oct","Sep","Aug","July","June","May","Apr","Mar","Feb","Jan"); 
      foreach($a as $r) { ?>
      <option value="<?php echo $r; ?>"><?php echo $r; ?></option><?php } ?></select>
      <select name="year" >
      <option value="">-----</option>
      <?php $e=date('Y'); for($j=$e;$j>=date('Y')-63;$j--) { ?>
      <option value="<?php echo $j; ?>"><?php echo $j; ?></option><?php } ?></select>
      </td></tr>
     
     <tr><td>Gender</td>
     <td><input type="radio" name="gender" value="male" >Male
     <input type="radio" name="gender" value="female" >Female</td></tr>
   
     
     <tr><td colspan="2" align="center"><input type="submit" name="signin" value="Save" class="login_button" ></td></tr>
     </table>
     </form> 
       </div>
        </div>
         </div>
         <?php include "footer.php" ?>

</body>
</html>
