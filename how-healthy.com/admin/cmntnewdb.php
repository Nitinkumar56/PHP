<?php
include "config.php";
$u=$_POST['user'];
$e=$_POST['eml'];
$to=$_POST['tt'];

$date = date('m/d/Y');


 mysql_query('insert into tbl_comments set username="'.$u.'" , emailid="'.$e.'",topic="'.$to.'", status="y" ,date="'.$date.'"');
 
// $j=mysql_insert_id();
header('location:managecommnt.php');



?>