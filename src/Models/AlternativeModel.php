<?php

namespace App\Saw\Models;

use App\Saw\Config\Database;
use App\Saw\Models\CriteriaModel;

class AlternativeModel {  
  public static function getAll() {
    $conn = Database::connect();

    $sql = <<<SQL
      SELECT * FROM alternatif;
    SQL;

    return mysqli_query($conn, $sql);
  }

  public static function getOne($id) {
    $conn = Database::connect();

    $sql = <<<SQL
      SELECT * FROM alternatif WHERE id_alternatif = '$id';
    SQL;

    return mysqli_query($conn, $sql);
  }

  public static function add($data) {
    $conn = Database::connect();
    $biaya = CriteriaModel::getBiaya();
  
    $alternatif = $data["alternative"];
    $biaya = $data["biaya"];
    $durasi = $data["durasi"];
    $mata_air = $data["mata_air"];
    $rating = $data["rating"];
    
    $sql = <<<SQL
      INSERT INTO alternatif (nama_alternatif, biaya, durasi, mata_air, rating)
      VALUEs ('$alternatif', '$biaya', '$durasi', '$mata_air', '$rating');
    SQL;
    
    mysqli_query($conn, $sql);
  }

  public static function update($data, $id) {
    $conn = Database::connect();
  
    $alternatif = $data["alternative"];
    $biaya = $data["biaya"];
    $durasi = $data["durasi"];
    $mata_air = $data["mata_air"];
    $rating = $data["rating"];
    
    $sql = <<<SQL
      UPDATE alternatif
      SET nama_alternatif = '$alternatif', biaya = '$biaya', durasi = '$durasi', mata_air = '$mata_air', rating = '$rating'
      WHERE id_alternatif = '$id';
    SQL;
    
    mysqli_query($conn, $sql);
  }

  public static function delete($id) {
    $conn = Database::connect();

    $sql = <<<SQL
      DELETE FROM alternatif
      WHERE id_alternatif = '$id';
    SQL;
    
    mysqli_query($conn, $sql);
  }
}