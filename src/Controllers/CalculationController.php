<?php

namespace App\Saw\Controllers;

use App\Saw\View;
use App\Saw\Models\AlternativeModel;

class CalculationController {
  public function index() {
    View::render("calculation/index", [
      "title" => "Perhitungan SAW"
    ]);
  }
  
  public function alternatif() {
    $data = AlternativeModel::getAll();
    View::render("calculation/alternative/index", [
      "title" => "Alternatif",
      "alternative" => $data
    ]);
  }

  public function addAlternatif() {
    View::render("calculation/alternative/add", [
      "title" => "Tambah data alternatif"
    ]);
  }
  
  public function addPostAlternatif() {
    AlternativeModel::add($_POST);
    View::redirect("/perhitungan/alternatif");
  }
  
  public function updateAlternatif() {
    $id = $_GET["id"];
    $data = AlternativeModel::getOne($id);

    View::render("calculation/alternative/edit", [
      "title" => "Ubah data alternatif",
      "alternative" => $data
    ]);
  }
  
  public function updatePostAlternatif() {
    $id = $_GET["id"];
    AlternativeModel::update($_POST, $id);
    View::redirect("/perhitungan/alternatif");
  }
  
  public function deleteAlternatif() {
    $id = $_GET["id"];
    AlternativeModel::delete($id);
    View::redirect("/perhitungan/alternatif");
  }
}