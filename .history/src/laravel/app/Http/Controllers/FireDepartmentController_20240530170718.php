<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;
use Illuminate\Http\Request;

class FireDepartmentController extends Controller
{
    public function index(){
        // prefecture_idが1のFireDepartmentのレコードを取得
      $firedepartments = FireDepartment::all();
      return response()->json($firedepartments,200,[],JSON_UNESCAPED_UNICODE);
    }
}












?>