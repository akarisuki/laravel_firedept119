<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;
use Illuminate\Http\Request;

class FireDepartmentController extends Controller
{
    public function index(Request $request){

      $fireDepartments = FireDepartment::where('prefecture_id',1)->get();

      $encode_array = json_encode($fireDepartments, JSON_UNESCAPED_UNICODE);

      return response()->json($encode_array);

    }
}












?>