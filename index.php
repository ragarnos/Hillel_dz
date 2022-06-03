<?php
spl_autoload_register(function ($class_name){
    $class_name = '/'.str_replace('\\', '/', $class_name);
    $dir = str_replace('\\', '/', __DIR__);
    $file =  $dir.$class_name.'.php';
    if(file_exists($file)){
        require_once $file;
    }else{
        die("Not files");
    }

});

use App\User;
use App\Models\Order;
use App\Models\Prodict;
use App\Http\Controllers\MainController;
use App\Http\Helpers\ImageHelper;


$user = new User();
$Order = new Order();
$prodict = new Prodict();
$MainController = new MainController();
$ImageHelper = new ImageHelper();

var_dump($user);
var_dump($prodict);
var_dump($Order);
var_dump($MainController);
var_dump($ImageHelper);
