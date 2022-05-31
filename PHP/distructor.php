<?php
class demo{
    public function demo()
    {
        echo ("constructor created");
    }
}
    class fun extends demo{
        public function __construct()
        {
            echo parent::demo();
            echo "2nd construct";
        }
        public function __destruct()
        {
            echo "distroy";
        }
    }
    $ob =new fun();
?>