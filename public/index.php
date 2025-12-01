<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Saw\Router;
use App\Saw\Controllers\LandingController;
use App\Saw\Controllers\StudyCaseController;

Router::get("/", LandingController::class, "index");
Router::get("/studi-kasus", StudyCaseController::class, "index");

Router::run();