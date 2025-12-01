<?php

namespace App\Saw\Controllers;

use App\Saw\View;

class StudyCaseController {
  public function index() {
    $data = [
      "title" => "Simple Addtive Weighting | Studi Kasus",
      "page_title" => "Simple Addtive Weighting",
      "page_name" => "Studi Kasus",
      "image" => "https://asset.kompas.com/crops/nPTchMla-BkmJVYANSbcQ9_Ry8g=/0x0:5184x3456/1200x800/data/photo/2022/01/03/61d2d39f73837.jpg",
      "criteria" => [
        [
          "criteria" => "K1",
          "description" => "Biaya yang dikeluarkan dari semua aspek untuk mendaki gunung",
          "weight" => 0.4
        ],
        [
          "criteria" => "K2",
          "description" => "Durasi Pendakian dari basecamp menuju puncak atau tempat camp",
          "weight" => 0.3
        ],
        [
          "criteria" => "K3",
          "description" => "Sumber mata air di area camp atau setiap pos pendakian",
          "weight" => 0.2
        ],
        [
          "criteria" => "K4",
          "description" => "Popularitas Gunung yang akan menjadi tujuan pendakian",
          "weight" => 0.1
        ]
      ],
      "alternative_data" => [
        [1, 2, 2, 3],
        [2, 2, 2, 5],
        [3, 4, 2, 5],
        [2, 3, 1, 5],
      ],
      "normalization" => [
        [1, 1, 1, 0.6],
        [0.5, 1, 1, 1],
        [0.3, 0.5 , 1, 1],
        [0.5, 0.67, 0.5 , 1],
      ],
      "matrix_weight" => [
        [0.4, 0.3, 0.2, 0.067],
        [0.2, 0.3, 0.2, 0.1],
        [0.12, 0.15, 0.2, 0.1],
        [0.2, 0.201, 0.1, 0.1],
      ],
      "results" => [0.967, 0.8, 0.57, 0.601]
    ];

    View::render("study_case/index", $data);
  }
}