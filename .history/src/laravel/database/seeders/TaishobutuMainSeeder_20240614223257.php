<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TaishobutuMain;

class TaishobutuMainSeeder extends Seeder
{
    public function run()
    {
        $taishobutu_mains = [
            [
                'appendix' => 1,
                'taishobutu_name' => '茶内コミュニティセンター',
                'taishobutu_address' => '茶内緑１０７番地５号',
                'taishobutu_tel' => '0153651234',
                'owners_name' => '石崎史典',
                'owners_tel'  => '08040486712',
                'total_area'  => 600.50,
                'fire_department_id' => 1 // 仮のIDを設定
            ]
        ];

        foreach ($taishobutu_mains as $taishobutu_main) {
            TaishobutuMain::create($taishobutu_main);
        }
    }
} 











