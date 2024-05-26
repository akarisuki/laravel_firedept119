<?php

namespace App\Http\Controllers;

use App\Models\FireDepartment;
use App\Models\Prefecture;
use Illuminate\Http\Request;

class PrefectureController extends Controller
{
    public function index(){
        $prefectures = Prefecture::all();
        return view('prefectures.index', compact('prefectures'));
    }

    public function getFireDepartments($prefectureId){
        $fireDepartments = FireDepartment::where('prefecture_id', $prefectureId)->get();
        return response()->json($fireDepartments);
    }
}
