<?php
include"config.php";
?>
<?php
//$h2=$_POST['h1'];
$us=$_POST['user'];
$ad=$_POST['ad'];
$cn=$_POST['cn'];
$eml=$_POST['em'];
$ps=$_POST['pass'];
//$pswrd=base64_encode($ps);
$c=$_POST['cp'];
$cpw=base64_encode($c);
$d=$_POST['date'];
$m=$_POST['month'];
$y=$_POST['year'];
$g=$_POST['gender'];
$s=$_POST['st'];
$bf=@$_GET['l'];
//$image=$_FILES['im']['name'];
//$tmp=$_FILES['im']['tmp_name'];
//move_uploaded_file($_FILES['im']['tmp_name'],'/upload'.$_FILES['im']['name']);

$number=mysql_query('update signup set username="'.$us.'" , address="'.$ad.'" , contact_number="'.$cn.'" ,emailid="'.$eml.'" , password="'.$ps.'" , confirm_password="'.$cpw.'" , day="'.$d.'" , month="'.$m.'" , year="'.$y.'" , gender="'.$g.'" ,image="'.$image.'",status="'.$s.'" where user_id="'.$bf.'" ');
 
 
header('location:manageuser.php');


?>