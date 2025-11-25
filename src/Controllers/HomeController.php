<?php

namespace App\Saw\Controllers;

use App\Saw\View;

class HomeController {
  public function landing() {
    View::render("landing/index");
  }
}