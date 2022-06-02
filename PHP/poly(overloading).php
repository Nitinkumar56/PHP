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
    class GFG{
        public function __call($name,$arguments){
            echo"Calling object method '$name'"
            .implode(', ' , $arguments). "\n";
        }
        public static function __callStatic($name, $arguments)
        {
            echo"Calling static method '$name'"
            .implode(', ' , $arguments). "\n";
        }
    }
    $obj=new GFG;
    $obj->runTest('in object context');
    GFG::runTest('in static context');
    ?>
</body>
</html>