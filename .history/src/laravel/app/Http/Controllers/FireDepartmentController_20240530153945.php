<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;
use Illuminate\Http\Request;

class FireDepartmentController extends Controller
{
    public function index(){
        // prefecture_idが1のFireDepartmentのレコードを取得
        $prefecture_id = 1;
        $fireDepartments = FireDepartment::find($prefecture_id);

        $encode_array = json_encode($fireDepartments, JSON_UNESCAPED_UNICODE);
         
        return $encode_array;
    }
}












?>