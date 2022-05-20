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
    class Person {
        public $age;
        function speak() {
            echo "Hello";
        }
    }
    $p1 = new Person();
    $p1->age =23;
    echo $p1->age;
    $p1->speak();
?>
</body>
</html>