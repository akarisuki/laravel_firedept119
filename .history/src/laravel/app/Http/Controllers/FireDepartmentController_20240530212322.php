<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;


class FireDepartmentController extends Controller
{
    public function index(){
        // prefecture_idが1のFireDepartmentのレコードを取得
      $firedepartments = FireDepartment::all();
      
      $encode_array = json_encode($firedepartments, JSON_UNESCAPED_UNICODE);
      return $encode_array;
    }
}












?>