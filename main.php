<?php
class reload
{
    private $name; 
    private $age;
    private $email;

    public function __call($name, $arguments)
    {
        self::setName();
    }

    private function setName()
    {
        
    }

    private function setAge()
    {
        
    }
}
