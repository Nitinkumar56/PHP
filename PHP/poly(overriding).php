<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
class H{
    function do(){
        echo"Parent class function";
    }
}
class W extends H{
    function do(){
        echo"child class function";
    }
}
$h=new W();
$w=new H();
$p->do();
$w->do();

?>

</body>
</html>