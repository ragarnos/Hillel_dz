<?php
class User {
    private $name = 'Eduard'.'<br>';
    private $age = '24'.'<br>';
    private $email = 'ragarnos12@gmail.com';

    public function __call($names, $arguments)
    {
        echo 'Вы пытались вызвать метод, который не существует: '.$names.'<br>';

    }
    private function setName()
    {
        echo $this->name;
    }

    private function setAge()
    {
        echo $this->age;
    }

    public function getAll() {
        printf(
            $this->setName(),
            $this->setAge(),
            $this->setEmail()

        );
    }
}
$users = new User;
$users->getAll();

?>