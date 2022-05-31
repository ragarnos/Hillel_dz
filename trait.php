<?php
trait Trait1 {
    public function method() {
        echo '1 ';
    }
}

trait Trait2 {
    public function method1() {
        echo '2 ';
    }
}
trait Trait3 {
    public function method2() {
        echo '3 ';
    }
}

class Test {
    use Trait1, Trait2, Trait3;
}
function getSum()
{
    $o = new Test();
    $o->method();
    $o->method1();
    $o->method2();
}
echo getSum();
?>