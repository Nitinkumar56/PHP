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
 <form name="addnew" method="post" action="cmntnewdb.php">
  <table>
  <tr><td>Username</td>
  <td><input type="text" name="user" placeholder="Username"/></td></tr>  
  
 <tr><td>EmailId</td>
 <td><input type="text" name="eml" placeholder="Contact-Number" /></td></tr>
 
 <tr><td>Topic</td>
  <td><textarea name="tt" rows="2" cols="15"></textarea></td></tr>
  
  <tr><td colspan="2" align="center"><input type="submit" name="signin" value="Save" class="login_button" ></td></tr>
     </table>
     </form> 
       </div>
        </div>
         </div>
         <?php include "footer.php" ?>

</body>
</html>


 