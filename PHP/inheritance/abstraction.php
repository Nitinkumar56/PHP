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
abstract class ami{
public $name;
public $age;
public function Des()
{
    return $this->name. ",<br>".
    $this->age. "yearsold";
}
abstract public function eat();
}
class cat extends ami{
    public function eat()
    {
        echo "cat is eating";
    }
    public function Des()
    {
        return parent::Des(). "<br>I'm a cat<br>";
    }
}
$ami=new cat();
$ami->name="Nitin";
$ami->age=19;
echo$ami->Des();
$ami->eat();
?>
</body>
</html>