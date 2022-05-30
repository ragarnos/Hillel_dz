<?php
class colors_random
{
    private $red;
    private $green;
    private $blue;
    function __construct($red, $green, $blue)
    {

        $this->set_red($red);
        $this->set_green($green);
        $this->set_blue($blue);
    }

    private function set_red($red)
    {
        $this->red = $red;
    }

    private function set_green($green)
    {
        $this->green = $green;
    }

    private function set_blue($blue)
    {
        $this->blue = $blue;
    }

    public function get_red()
    {
        return $this->red;
    }

    public function get_green()
    {
        return $this->green;
    }

    public function get_blue()
    {
        return $this->blue;
    }
    public function equals($color1, $color2)
    {
        if ($color1->get_red() == $color2->get_red() and $color1->get_green() == $color2->get_green() and $color1->get_blue() == $color2->get_blue()) {
            return true;
        } else {
            return false;
        }
    }

    public static function random_color($some_color)
    {
        $some_color->set_(rand(0, 255));
        $some_color->set_green(rand(0, 255));
        $some_color->set_blue(rand(0, 255));
    }

    public static function mix_color($color1, $color2)
    {
        $new_color[] = round(($color1->get_red() + $color2->get_red()) / 2);
        $new_color[] = round(($color1->get_green() + $color2->get_green()) / 2);
        $new_color[] = round(($color1->get_blue() + $color2->get_blue()) / 2);
        return ($new_color);
    }
} 

$a = new colors_random(110,255,255);

var_dump($a);



