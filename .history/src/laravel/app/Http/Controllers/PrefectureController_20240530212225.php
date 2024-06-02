<?php

namespace App\Http\Controllers;

//use App\Models\FireDepartment;
use App\Models\Prefecture;

class PrefectureController extends Controller
{
    public function index(){
        $prefectures = Prefecture::all();
        //return view('prefectures.index', compact('prefectures'));
        $encode_array = json_encode($prefectures, JSON_UNESCAPED_UNICODE);
        return $encode_array;
    }

    // public function getFireDepartments($prefectureId){
    //     $fireDepartments = FireDepartment::where('prefecture_id', $prefectureId)->get();
    //     return response()->json($fireDepartments);
    // }
}
