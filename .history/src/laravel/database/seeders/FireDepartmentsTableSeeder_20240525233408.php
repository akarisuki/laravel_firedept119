<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\FireDepartment;

class FireDepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fireDepartments = [
            ['name' => '札幌市消防局', 'prefecture_id' => 1],
            ['name' => '江別市消防本部', 'prefecture_id' => 1],
            ['name' => '千歳市消防本部', 'prefecture_id' => 1],
            ['name' => '恵庭市消防本部', 'prefecture_id' => 1],
            ['name' => '北広島市消防本部', 'prefecture_id' => 1],
            ['name' => '石狩北部地区消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '函館市消防本部', 'prefecture_id' => 1],
            ['name' => '森町消防本部', 'prefecture_id' => 1],
            ['name' => '八雲町消防本部', 'prefecture_id' => 1],
            ['name' => '長万部町消防本部', 'prefecture_id' => 1],
            ['name' => '渡島西部広域事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '南渡島消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '檜山広域行政組合消防本部', 'prefecture_id' => 1],
            ['name' => '小樽市消防本部', 'prefecture_id' => 1],
            ['name' => '羊蹄山ろく消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '岩内・寿都地方消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '北後志消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '夕張市消防本部', 'prefecture_id' => 1],
            ['name' => '美唄市消防本部', 'prefecture_id' => 1],
            ['name' => '三笠市消防本部', 'prefecture_id' => 1],
            ['name' => '歌志内市消防本部', 'prefecture_id' => 1],
            ['name' => '滝川地区広域消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '岩見沢地区消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '深川地区消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '砂川地区広域消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '南空知消防組合消防本部', 'prefecture_id' => 1],
        ];
    }
}
