<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PrefectureController extends Controller
{
    public function index()
    {
        $prefectures = Prefecture::all();
        return response()->json($prefectures);
    }

    public function getFireDepartments($id)
    {
        $prefecture = Prefecture::with('fireDepartments')->find($id);
        if(!$prefecture) {
            return response()->json(['message' => 'Prefecture not found'], 404);
        }
        return response()->json($prefecture->getFireDepartments);
    }
}
