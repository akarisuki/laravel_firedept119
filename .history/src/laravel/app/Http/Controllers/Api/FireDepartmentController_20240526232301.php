<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FireDepartment;
use App\Models\Prefecture;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FireDepartmentController extends Controller
{
    public function index()
    {
        $fireDepartments = FireDepartment::all();
        return response()->json($fireDepartments);
    }
}
