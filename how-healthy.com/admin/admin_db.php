<?php
include('config.php');
session_start();
$a=$_POST['adm'];
$p=$_POST['pas'];
$e=$_POST['em'];
$sel=mysql_query('select admin_id from tbl_admin where admin_name ="'.$a.'" && admin_password ="'.$p.'"');
$data=mysql_fetch_array($sel);
$_SESSION['id1']=$data['admin_id'];
  if($_SESSION['id1']!="")
   {
   header('location:home.php');
      }
   else
   {
    $msg='Invalid Username OR Password';
	header('location:index.php?mes='.$msg);
    }
   ?>