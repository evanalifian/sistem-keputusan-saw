<?php

namespace App\Saw\Controllers;

use App\Saw\View;
use App\Saw\Models\AlternativeModel;
use App\Saw\Models\CriteriaModel;

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
  
  public function criteria() {
    $criteria = CriteriaModel::getCriteria();
    $biaya = CriteriaModel::getBiaya();
    $durasi = CriteriaModel::getDurasi();
    $mata_air = CriteriaModel::getMataAir();
    $popularitas = CriteriaModel::getPopularitas();

    View::render("calculation/criteria/index", [
      "title" => "Kriteria alternatif",
      "criteria" => $criteria,
      "biaya" => $biaya,
      "durasi" => $durasi,
      "mata_air" => $mata_air,
      "popularitas" => $popularitas,
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