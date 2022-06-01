<?php
trait Trait1
{
    public function method()
    {
        echo 1;
    }
}

trait Trait2
{
    public function method()
    {
        echo 2;
    }
}

trait Trait3
{
    public function method()
    {
        echo 3;
    }
}


class Test {
    use Trait1, Trait2, Trait3 {
        Trait2::method insteadof Trait1;
        Trait3::method insteadof Trait2;
        Trait1::method as Trait1;
        Trait2::method as Trait2;
        Trait3::method as Trait3;
    }
}

function getSum()
{
    $o = new Test();
    $o->Trait1();
    $o->Trait2();
    $o->Trait3();
}
echo getSum();
?>