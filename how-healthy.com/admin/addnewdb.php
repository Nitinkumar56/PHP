<?php
include"config.php";
?>
<?php
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


$number=mysql_query('select * from signup where username="'.$us.'" ');

  if(mysql_num_rows($number)!=0)
   {
    
	 $meg= '1';
	 header('location:signup.php?mes='.$meg);
      }
	 
	  
   else
   { 
 mysql_query('insert into signup set username="'.$us.'" , address="'.$ad.'" , contact_number="'.$cn.'" ,emailid="'.$eml.'" , password="'.$ps.'" , confirm_password="'.$cpw.'" , day="'.$d.'" , month="'.$m.'" , year="'.$y.'" , gender="'.$g.'" , status="n" ');
 
 $j=mysql_insert_id();
header('location:manageuser.php?i='.$j);
}


?>