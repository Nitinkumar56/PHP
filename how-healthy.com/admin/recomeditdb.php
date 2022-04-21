<?php 
session_start();
include "config.php";
$n2=@$_GET['l'];
$image1=$_FILES['img']['name'];


move_uploaded_file($_FILES['img']['tmp_name'],'images/'.$_FILES['img']['name']);



mysql_query('update tbl_recommend set  image_name="'.$image1.'" where image_id="'.$n2.'"');
header('location:recom.php');

?>