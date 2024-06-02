<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;


class FireDepartmentController extends Controller
{
    public function index() {
      $firedepartments = FireDepartment::all();
      $encode_array = json_encode($firedepartments, JSON_UNESCAPED_UNICODE);
      return $encode_array;
    }

    public function getByPrefecture($prefectureId) {
      $firedepartments = FireDepartment::where('prefecture_id', $prefectureId)->get();
      return response()->json($firedepartments);
  }
}












?>