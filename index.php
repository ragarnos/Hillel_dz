<?php

interface Pay
{
    public function getAmount();
}
abstract class PMethod
{
    abstract public function newPay(): Pay;

    public function totalPay()
    {
        $Pay = $this->newPay();
        return $Pay->getAmount();
    }
}
class PrivatPay implements Pay
{
    private int $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount(): int
    {
        return $this->amount;
    }
}
class MonoPay implements Pay
{
    private int $amount;
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function getAmount(): int
    {
        return $this->amount;
    }
}
class PrivatPayM extends PMethod
{
    private int $amount;
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function newPay(): Pay
    {
        return new PrivatPay($this->amount);
    }
}
class MonoPayM extends PMethod
{
    private int $amount;
    public function __construct($amount)
    {
        $this->amount = $amount;
    }
    public function newPay(): Pay
    {
        return new MonoPay($this->amount);
    }
}

$pay = new PrivatPayM(560);
echo $pay->totalPay();
$pay = new MonoPayM(1920);
echo '<br>';
echo $pay->totalPay();