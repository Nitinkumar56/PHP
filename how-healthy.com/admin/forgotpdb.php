<?php
include "config.php";
if($_POST){
$p=$_POST['email'];

$s=mysql_query('select * from tbl_admin where emailid="'.$p.'"');
$d=mysql_fetch_array($s);
$f=$d['password'];

$emailto = "shaniyachawla@gmail.com"; 
$subject = "Admin Forgot Password "; 
$from = 'info@swapdevelopment.com'; 

$message = "<html>
<head>
<title> Admin Forgot Password Email</title>
</head>
<body>
<p>This email contains Admin's Password</p>
<table>
<tr>
<th>Email-Id</th>
<th>Password</th>
</tr>
<tr>
<td>".$p."</td>
<td>".$f."</td>
</tr>
</table>
</body>
</html>";

$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";

// More headers
$headers .= 'From: <info@swapdevelopment.com>'.$from. "\r\n";
mail($emailto,$subject,$message,$headers);
  $v="Email is successfully sent";
   header('location:index.php?rgt='.$v);
 }
 else
{
$x="Error sending email";
header('location:forgotp.php?rog='.$x);
} 
 
 ?>