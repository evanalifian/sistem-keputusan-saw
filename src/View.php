<?php

namespace App\Saw;

class View {
  public static function render($view, $data = []) {
    require_once __DIR__ . "/Views/templates/header.php";
    require_once __DIR__ . "/Views/" . $view . ".php";
    require_once __DIR__ . "/Views/templates/footer.php";
  }

  public static function redirect($path) {
    header("Location: $path");
    exit;
  }
}