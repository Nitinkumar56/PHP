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
              <?php 
	           $j=@$_GET['ed'];
	           $s=mysql_query('select * from signup where user_id="'.$j.'" '); 
	           $x=mysql_fetch_array($s);
	           ?>
 <div style="margin: 0 auto; width: 350px;">      
 <form name="editad" class="editTable" method="post" action="editdb.php?l=<?php echo $x['user_id'];?>">
       
     <font>Username</font>
     <span><input type="text" name="user" value="<?php echo $x['username'];?>"  /> </span>
     <font>Address</font>
     <span><input type="text" name="ad"  value="<?php echo $x['address'];?>"  /> </span>
     <font>Contact Number</font>
     <span><input type="text" name="cn" value="<?php echo $x['contact_number'];?>"  /></span>
     <font>Email-Id</font>
     <span><input type="text" name="em" value="<?php echo $x['emailid'];?>"  /></span>
     <font>Password</font>
     <span><input type="text" name="pass" value="<?php echo $x['password'];?>"  /></span>
     <font>Date Of Birth</font>
     <span><select name="date" style="width:28%;">
      <option value="<?php echo $x['day'];?>"><?php echo $x['day'];?></option>
	  <?php for($i=31;$i>=1;$i--) { ?>
      <option value="<?php echo $i;  ?>"><?php echo $i;  ?></option><?php } ?></select>
      <select name="month" style="width:35%">
      <option value="<?php echo $x['month'];?>"><?php echo $x['month'];?></option>
      <?php $a=array("Dec","Nov","Oct","Sep","Aug","July","June","May","Apr","Mar","Feb","Jan"); 
      foreach($a as $r) { ?>
      <option value="<?php echo $r; ?>"><?php echo $r; ?></option><?php } ?></select>
      <select name="year" style="width:37%;">
      <option value="<?php echo $x['year'];?>"><?php echo $x['year'];?></option>
      <?php $e=date('Y'); for($j=$e;$j>=date('Y')-63;$j--) { ?>
      <option value="<?php echo $j; ?>"><?php echo $j; ?></option><?php } ?></select></span>
      <font>Gender</font>
     <span><input type="text" name="gender" value="<?php echo $x['gender']; ?>" ></span>
     <font>Status</font>
     <span><input type="text" name="st" value="<?php echo $x['status']; ?>"</span>
      
      
  <div class="back">
  <input type="submit" value="Save" style="background-color:#996633; color:#EEEEEE; padding:5px; border:none; margin-top:7px;"/>
  </div>
  </form>
  </div> 
        </div>
         </div>
    <?php include "footer.php"; ?>
    
    </body>
      </html>
