<?php

namespace App\Saw\Config;

class Database {
  private static $servername = "localhost";
  private static $username = "root";
  private static $password = "";
  private static $db_name = "project_si";

  public static function connect() {
    return mysqli_connect(self::$servername, self::$username, self::$password, self::$db_name);
  }
}