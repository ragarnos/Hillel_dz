<?php


class User
{
    public int $id;
    public string $password;
    public $email;

    public function __construct($id,$password, $email)
    {
        if ($id !== 1){
            throw new Exception('Id поле должно содержать только цыфры');
        }
        if (strlen($password) > 8){
            throw new Exception('Password поле должно содержать Не более 8 цыфр');
        }
    }
    public function getUserData()
    {
        return $this->id;
        return $this->email;
    }
}
try {
    $users = new User(2,"sadawdas", 'Ragarnos12@gmail.com');
    $users->getUserData();
}catch (Exception $e){
    die('Строка: #'.__LINE__." => Ошибка в файле: ".$e->getFile());
}

