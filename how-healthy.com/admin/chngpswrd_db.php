<?php
include('config.php');
$old=$_POST['ps'];
$new=$_POST['np'];
if(isset($_POST['ps']))
{
$query = mysql_query("SELECT admin_password from tbl_admin WHERE admin_password= '". $_POST["ps"]."'");
 $abc = mysql_num_rows($query);
 
    if($abc==0)
 {
      $msg='1';
  header('location:change_password.php?mes='.$msg);

        } 

else
{
$sav=mysql_query('update tbl_admin set admin_password="'.$new.'" where admin_password ="'.$old.'"');
$mg='1';
header('location:home.php?sus='.$mg);
}
}


?>

