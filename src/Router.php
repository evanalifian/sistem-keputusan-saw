<?php

namespace App\Saw;

use App\Saw\View;

class Router {
  private static $path = "/";
  private static $method;
  private static $routes = [];

  private static function register($method, $path, $controller, $function) {
    self::$routes[] = [
      "method" => $method,
      "path" => $path,
      "controller" => $controller,
      "function" => $function,
    ];
  }

  public static function run() {
    if (isset($_SERVER['PATH_INFO'])) {
      self::$path = $_SERVER['PATH_INFO'];
    }

    self::$method = $_SERVER['REQUEST_METHOD'];

    foreach (self::$routes as $route) {
      if (self::$path == $route["path"] && self::$method == $route["method"]) {
        $controller = new $route["controller"];
        $function = $route["function"];
        $controller->$function();
        return;
      }
    }

    http_response_code(404);
    View::render("404", [
      "title" => "404 | Halaman tidak ditemukan"
    ]);
  }

  public static function get($path, $controller, $function) {
    self::register("GET", $path, $controller, $function);
  }

  public static function post($path, $controller, $function) {
    self::register("POST", $path, $controller, $function);
  }
}