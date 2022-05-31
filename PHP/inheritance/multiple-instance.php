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
    interface x{
        public function car();
    }
    interface y{
        public function car1();
    }
    interface z{
        public function car2();
    }
    interface d{
        public function car3();
    }
    class multiple implements x,y,z
    {
        public function car(){
            echo "\ninterface x";
        }
        public function car1(){
            echo "\n<br>interface y";
        }
        public function car2(){
            echo "\n<br>interface z";
        }
        public function car3(){
            echo "\n<br>interface d";
        }
        function demo(){
            echo "\n<br>car function";
        }
    }
    $ob=new multiple();
    $ob->car();
    $ob->car1();
    $ob->car2();
    $ob->car3();
    $ob->demo();
    ?>
</body>
</html>