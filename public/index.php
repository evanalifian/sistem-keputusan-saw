<?php

require_once __DIR__ . "/../vendor/autoload.php";

use App\Saw\Router;
use App\Saw\Controllers\LandingController;
use App\Saw\Controllers\StudyCaseController;
use App\Saw\Controllers\CalculationController;

// Home
Router::get("/", LandingController::class, "index");
Router::get("/studi-kasus", StudyCaseController::class, "index");

// Calculation
Router::get("/perhitungan", CalculationController::class, "index");
Router::get("/perhitungan/alternatif", CalculationController::class, "alternatif");

// Alternative
Router::get("/perhitungan/alternatif/tambah", CalculationController::class, "addAlternatif");
Router::post("/perhitungan/alternatif/tambah", CalculationController::class, "addPostAlternatif");
Router::get("/perhitungan/alternatif/ubah", CalculationController::class, "updateAlternatif");
Router::post("/perhitungan/alternatif/ubah", CalculationController::class, "updatePostAlternatif");
Router::get("/perhitungan/alternatif/hapus", CalculationController::class, "deleteAlternatif");

Router::run();