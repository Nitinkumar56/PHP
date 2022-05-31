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
class hi{
    private $name;
    private $age;
    function __construct($n,$a)
    {
        $this -> name=$n;
        $this -> age=$a;
    }
    public function setAge($ab){
        $this ->ab=$ab;
    }
    function disp(){
        echo "Hii\n".$this->name."<br>";
        return $this->age-$this->ab; 
    }
}
$ob=new hi("Nitin",22);
$ob->setAge(3);
echo "You are\n".$ob -> disp()."\nYears old";
?>
</body>
</html>