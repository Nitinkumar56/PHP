<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php include"header.php" ?>
<?php include"sidebar.php" ?>
<?php include"config.php";  ?>
<div class="Mid-panel">
  <div class="messagePanel">
  <center>
  <form name="rec" action="recom1db.php" method="post" enctype="multipart/form-data" >
  <table style="padding-top:80px">
  <tr><td style="color:#996600;font-family:Georgia, 'Times New Roman', Times, serif">Topic</td>
    <td><select name="issue">
      <option value="">---------</option>
      <option value="Allergy">Allergy</option>
      <option value="Blood Pressure">Blood Pressure</option>
      <option value="Dental Care">Dental Care</option>
      <option value="Hair Issues">Hair Issues</option>
      <option value="Joint Pain">Joint Pain</option>
      <option value="Migraine">Migraine</option>
      <option value="Obesity">Obesity</option>
       <option value="Skin Care">Skin Care</option>
      </select></td></tr>
     <tr><td style="color:#996600; font-family:Georgia, 'Times New Roman', Times, serif">Information</td>
	 <td><input type="text" name="info" /></td></tr>
	 <tr>
     <td colspan="2"><input type="file" name="img"  /></td>
     </tr>
    <tr>
      <td align="center" colspan="2"><input type="submit" value="Save" name="s" style="border:none; background-color:#996600; color:#FFFFFF; padding:5px;" /></td></tr>
       </table>
	   </form>
         </center>
  </div>
</div>
<?php include"footer.php" ?>

