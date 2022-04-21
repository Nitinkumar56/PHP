<?php
include"config.php";
?>
<?php
//$h2=$_POST['h1'];
$tt=$_POST['tp'];
$ss=$_POST['st'];
$bf=@$_GET['l'];
//$image=$_FILES['im']['name'];
//$tmp=$_FILES['im']['tmp_name'];
//move_uploaded_file($_FILES['im']['tmp_name'],'/upload'.$_FILES['im']['name']);

$number=mysql_query('update tbl_comments set topic="'.$tt.'" , status="'.$ss.'" where comment_id="'.$bf.'" ');
 
 
header('location:managecommnt.php');


?>