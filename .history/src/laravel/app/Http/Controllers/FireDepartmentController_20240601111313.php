<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;
use App\Models\Prefecture;

class FireDepartmentController extends Controller
{
    public function index() {
      $fireDepartments = FireDepartment::all();
      return view('select_boxes', compact('prefectures', 'fireDepartments'));
    }
}












?>