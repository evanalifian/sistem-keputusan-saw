<?php

namespace App\Saw\Controllers;

use App\Saw\View;

class HomeController {
  private static $data = [
    "title" => "Simple Addtive Weighting",
    "description" => "Sistem Pendukung Keputusan Menentukan Siswa Berprestasi dengan Metode SAW (Simple Addtive Weighting)",
    "repository" => "https://github.com/evanalifian/sistem-keputusan-saw"
  ];
  public function landing() {
    View::render("landing/index", self::$data);
  }
}