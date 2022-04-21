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
	          $j=@$_GET['v'];
	          $view=mysql_query('select * from tbl_recommend where image_id="'.$j.'" '); 
	          $vv=mysql_fetch_array($view);
	           ?>
      
	  <div style="margin: 0 auto; width: 250px;">
     <center>
	 <form class="viewTable" method="post" name="view">
       	<table style="padding-top:30px;">
	<td><img src="images/<?php echo $vv['image_name'];  ?>" height="200px" width="200px"> </td>
		
		</tr>
		
		</table>
       
	   
	   </form>
	   </center>
       </div>
	  
       <div class="back">
       <a href="recomback.php"><input type="button" name="back" value="Back" style="background-color:#000000; color:#EEEEEE; padding:5px; border:none;"/></a>
        </div>
           </div>
             </div>
<div class="clear"></div>
<?php include"footer.php" ?>


</body>
</html>
