<?php
include('config.php');
if(isset($_REQUEST['s2']))
{
$ck = $_POST['s1'];
foreach($_POST['c2'] as $value)
{
/*if($ck=="y")
{
mysql_query('update tbl_comments set status = "'.$ck.'" where comment_id='.$value);
}
elseif($ck=="n")
{
mysql_query('update tbl_comments set status = "'.$ck.'" where comment_id='.$value);
}*/
if($ck=="d")
{ 
mysql_query('delete from tbl_recommend where image_id='.$value);
}
}
}
header('location:recom.php');
?>