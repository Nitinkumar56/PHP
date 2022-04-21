<?php 
session_start();
include "config.php";
$n1=$_POST['issue'];
$inf=$_POST['info'];
$image1=$_FILES['img']['name'];

move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$_FILES['img']['name']);

mysql_query('insert into tbl_recommend set topic="'.$n1.'" , image_name="'.$image1.'",image_info="'.$inf.'"');
header('location:recom1.php');

?>