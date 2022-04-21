<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<div class="Mid-panel">
  <div class="messagePanel">
    <?php if(@$_GET['sus']==1)
{
echo 'Password Changed Successfully';
} 
else
{ 
?>
    <p style="font-size:24px; color:#FF9900; font-weight:bolder; text-align:center"><?php echo 'Welcome Admin'; ?> </p>
    <?php } ?>
    </span>
    </td>
    <p style="font-size:13px">You are the only person who can get all the details related to your website and can change anything.Be responsible and enjoy your rights.All the best.</p>
  </div>
</div>
<?php include"footer.php" ?>
</body>
</html>
