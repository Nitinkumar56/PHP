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
	          $j=@$_GET['p'];
	          $view=mysql_query('select * from signup where user_id="'.$j.'" '); 
	          $f=mysql_fetch_array($view);
	           ?>
      <div style="margin: 0 auto; width: 250px;">
     
       <form class="viewTable" method="post" name="view">
       	<font>Username</font>
        <span><?php echo $f['username'];?></span>
        <font>Address</font>
        <span><?php echo $f['address'];?></span>
        <font>Contact Number</font>
        <span><?php echo $f['contact_number'];?></span>
        <font>Email-Id</font>
        <span><?php echo $f['emailid'];?></span>
       <font>Password</font>
       <span><?php echo $f['password'];?></span>
       <font>Date Of Birth</font>
       <span><?php echo $f['day'];?> <?php echo $f['month'];?> <?php echo $f['year'];?></span>
       <font>Gender</font>
       <span><?php echo $f['gender']; ?></span>
       <div class="clear"></div>
       </form>
       </div> 
       <div class="back">
       <a href="back.php"><input type="button" name="back" value="Back" style="background-color:#000000; color:#EEEEEE; padding:5px; border:none;"/></a>
        </div>
           </div>
             </div>
<div class="clear"></div>
<?php include"footer.php" ?>


</body>
</html>
