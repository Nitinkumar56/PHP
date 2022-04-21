<?php
include('config.php');
if(isset($_REQUEST['s2']))
{
$ck = $_POST['s1'];
foreach($_POST['ch'] as $value)
{
if($ck=="y")
{
mysql_query('update tbl_kapoor set status = "'.$ck.'" where sno='.$value);
}
elseif($ck=="n")
{
mysql_query('update tbl_kapoor set status = "'.$ck.'" where sno='.$value);
}
elseif($ck=="d")
{ 
mysql_query('delete from tbl_kapoor where sno='.$value);
}
}
}
header('location:index.php');
?>