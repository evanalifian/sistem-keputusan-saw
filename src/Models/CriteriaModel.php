<?php

namespace App\Saw\Models;

use App\Saw\Config\Database;

class CriteriaModel {
  public static function getCriteria() {
    $conn = Database::connect();

    $sql = <<<SQL
      SELECT * FROM kriteria;
    SQL;

    return mysqli_query($conn, $sql);
  }

  public static function getBiaya() {
    $conn = Database::connect();

    $sql = <<<SQL
      SELECT * FROM parameter_biaya;
    SQL;

    return mysqli_query($conn, $sql);
  }

  public static function getDurasi() {
    $conn = Database::connect();

    $sql = <<<SQL
      SELECT * FROM parameter_durasi;
    SQL;

    return mysqli_query($conn, $sql);
  }

  public static function getMataAir() {
    $conn = Database::connect();

    $sql = <<<SQL
      SELECT * FROM parameter_mata_air;
    SQL;

    return mysqli_query($conn, $sql);
  }
  
  public static function getPopularitas() {
    $conn = Database::connect();

    $sql = <<<SQL
      SELECT * FROM parameter_popularitas;
    SQL;

    return mysqli_query($conn, $sql);
  }
}