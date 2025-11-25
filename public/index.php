<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Saw\Router;
use App\Saw\Controllers\HomeController;

Router::get("/", HomeController::class, "landing");

Router::run();