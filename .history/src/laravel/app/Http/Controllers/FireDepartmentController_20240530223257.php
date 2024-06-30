<?php


namespace App\Http\Controllers;


use App\Models\FireDepartment;
use App\Models\Prefecture;

class FireDepartmentController extends Controller
{
    public function showSelectBoxes() {
      $prefectures = Prefecture::all();
      $fireDepartments = FireDepartment::all();
    }
}












?>