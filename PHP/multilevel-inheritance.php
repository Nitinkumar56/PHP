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
    class A{
        function demo(){
            echo "demo function";
        }
    }
    class B extends A {
        function hii(){
            echo "hii function";
        }
    }
    class C extends A {
        function hi(){
            echo "hii function";
        }
    }
    $ob = new C();
    $ob -> hi();
    $ob -> demo();
    ?>
</body>
</html>