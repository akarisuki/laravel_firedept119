<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;
use Illuminate\Http\Request;

class FireDepartmentController extends Controller
{
    public function index(Request $request){
        // prefecture_idが1のFireDepartmentのレコードを取得
        $fireDepartments = FireDepartment::where('prefecture_id', 1)->get();

        // 取得したデータをJSON形式で返す（Laravelが自動的にJSON_UNESCAPED_UNICODEを適用）
        return response()->json($fireDepartments);
    }
}












?>