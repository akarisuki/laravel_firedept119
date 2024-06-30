<?php

namespace App\Http\Controllers;

use App\Models\TaishobutuMain;
use Illuminate\Http\Request;

class TaishobutuMainController extends Controller
{
    //indexコントローラーを作成して、一覧表示
    //1.Seederでテストデータを登録する。
    //2.viewにとりあえずデータを出力
    public function index(){
        $taishoubutu_mains = TaishobutuMain::all();
        
    }
}
