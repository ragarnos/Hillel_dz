<?php
require_once __DIR__.'/vendor/autoload.php';


use App\User;
use App\Models\Order;
use App\Models\Prodict;
use App\Http\Controllers\MainController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrdersController;
use App\Http\Helpers\ImageHelper;

$user = new User();
$Order = new Order();
$prodict = new Prodict();
$MainController = new MainController();
$DashboardController = new DashboardController();
$OrdersController = new OrdersController();
$ImageHelper = new ImageHelper();

var_dump($user);
var_dump($Order);
var_dump($prodict);
var_dump($MainController);
var_dump($DashboardController);
var_dump($OrdersController);
var_dump($ImageHelper);
