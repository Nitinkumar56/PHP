<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php 
include "config.php";

	           $j=@$_GET['de'];
	           $s=mysql_query('select * from tbl_comments where comment_id="'.$j.'" '); 
	           $x=mysql_fetch_array($s);
	           
mysql_query('delete from tbl_comments where comment_id="'.$j.'" ');
header('location:managecommnt.php');
?>

</body>
</html>
