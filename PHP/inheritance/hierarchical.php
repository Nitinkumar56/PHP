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
class ParentSoft {
var $var = "This is a first variable. </br>";
public $f_name;
// simple class method
function returnVar() {
echo $this->f_name;
}
function set_f_name($set_this){
$this->f_name = $set_this;
}}
class child_0 extends ParentSoft {
function setVal($set_this){
$this->f_name = $set_this;
}
function getValue(){
echo $this->f_name;
}}
class child_1 extends ParentSoft {
function setVal($set_this){
$this->f_name = $set_this." - ".$set_this;;
}
function getValue(){
echo $this->f_name;
}}
$object1 = new child_0();
$object1->setVal("It is a first child class </br>");
$object1->getValue();
$object2 = new child_1();
$object2->setVal("It is a second child class");
$object2->getValue();
?>
</body>
</html>