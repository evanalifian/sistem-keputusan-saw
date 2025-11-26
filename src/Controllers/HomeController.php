<?php

namespace App\Saw\Controllers;

use App\Saw\View;

class HomeController {
  private static $data = [
    "title" => "Simple Addtive Weighting",
    "description" => "Sistem Pendukung Keputusan Menentukan Siswa Berprestasi dengan Metode SAW (Simple Addtive Weighting)",
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
        "photo" => ""
      ],
      [
        "name" => "EVAN RAFA RADYA ALIFIAN",
        "nim" => "240411100063",
        "photo" => "/member/EVAN RAFA RADYA ALIFIAN.jpg"
      ],
    ]
  ];

  public function landing() {
    View::render("landing/index", self::$data);
  }
}