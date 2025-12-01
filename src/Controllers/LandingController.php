<?php

namespace App\Saw\Controllers;

use App\Saw\View;

class LandingController {
  public function index() {
    $data = [
      "title" => "Simple Addtive Weighting",
      "description" => "SISTEM PENDUKUNG KEPUTUSAN UNTUK MENENTUKAN PENDAKIAN GUNUNG TERBAIK DI JAWA TENGAH MENGGUNAKAN METODE SAW (SIMPLE ADDITIVE WEIGHTING) dengan bobot ",
      "member" => [
        [
          "name" => "FATHAN RUHUL ALAM",
          "nim" => "240411100190",
          "photo" => "/member/FATHAN RUHUL ALAM.jpg"
        ],
        [
          "name" => "IMAN WAHYUDY",
          "nim" => "240411100070",
          "photo" => "/member/IMAN WAHYUDY.jpg"
        ],
        [
          "name" => "MUHAMMAD AMMAR ABDULHAKIM",
          "nim" => "240411100109",
          "photo" => "/member/MUHAMMAD AMMAR ABDULHAKIM.jpg"
        ],
        [
          "name" => "EVAN RAFA RADYA ALIFIAN",
          "nim" => "240411100063",
          "photo" => "/member/EVAN RAFA RADYA ALIFIAN.jpg"
        ],
      ]
    ];

    View::render("landing/index", $data);
  }
}