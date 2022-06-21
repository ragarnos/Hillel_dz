<?php

interface  Rate_plan
{
    public function price();
    public function category();
}
abstract class newTaxi
{
    abstract public function createCarTaxi(): Rate_plan;
    public function CategoryAndPrice(): array
    {
        $price = $this->createCarTaxi()->price();
        $category = $this->createCarTaxi()->category();
        return compact('price', 'category');
    }
}
class EconomyTariff implements Rate_plan
{

    public function price(): string
    {
        return '55 грн';
    }

    public function category(): string
    {
        return 'Эконом Класс';
    }
}
class Economy extends newTaxi
{

    public function createCarTaxi(): Rate_plan
    {
        return new EconomyTariff();
    }
}
class StandardTariff implements Rate_plan
{

    public function price(): string
    {
        return '90 грн';
    }

    public function category(): string
    {
        return 'Стандарт';
    }
}
class Standard extends newTaxi
{

    public function createCarTaxi(): Rate_plan
    {
        return new StandardTariff();
    }
}
class LuxTariff implements Rate_plan
{

    public function price(): string
    {
        return '190 грн';
    }

    public function category(): string
    {
        return 'Премиум класс (LUX)';
    }
}
class Lux extends newTaxi
{

    public function createCarTaxi(): Rate_plan
    {
        return new LuxTariff();
    }
}

echo '<pre>'.'<br>';
$econom = new Economy();
var_dump($econom->CategoryAndPrice());
echo '<pre>'.'<br>';
echo '<pre>'.'<br>';
echo '<pre>'.'<br>';
$standard = new Standard();
var_dump($standard->CategoryAndPrice());
$luxcar = new Lux();
echo '<pre>'.'<br>';
echo '<pre>'.'<br>';
var_dump($luxcar->CategoryAndPrice());