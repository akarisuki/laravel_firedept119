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
            //北海道
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
            ['name' => '旭川市消防本部', 'prefecture_id' => 1],
            ['name' => '上川北部消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '士別地方消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '大雪消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '富良野広域連合消防本部', 'prefecture_id' => 1],
            ['name' => '留萌消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '増毛町消防本部', 'prefecture_id' => 1],
            ['name' => '北留萌消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '稚内地区消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '利尻礼文消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '南宗谷消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '網走地区消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '北見地区消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '紋別地区消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '遠軽地区広域組合消防本部', 'prefecture_id' => 1],
            ['name' => '美幌・津別広域事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '斜里地区消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '室蘭市消防本部', 'prefecture_id' => 1],
            ['name' => '苫小牧市消防本部', 'prefecture_id' => 1],
            ['name' => '登別市消防本部', 'prefecture_id' => 1],
            ['name' => '白老町消防本部', 'prefecture_id' => 1],
            ['name' => '西胆振行政事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '胆振東部消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '日高西部消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '日高中部消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '日高東部消防組合消防本部', 'prefecture_id' => 1],
            ['name' => 'とかち広域消防局', 'prefecture_id' => 1],
            ['name' => '釧路市消防本部', 'prefecture_id' => 1],
            ['name' => '釧路東部消防組合消防本部', 'prefecture_id' => 1],
            ['name' => '釧路北部消防事務組合消防本部', 'prefecture_id' => 1],
            ['name' => '根室市消防本部', 'prefecture_id' => 1],
            ['name' => '根室北部消防事務組合消防本部', 'prefecture_id' => 1],
            //青森県
            ['name' => '青森地域広域事務組合消防本部', 'prefecture_id' => 2],
            ['name' => '弘前地区消防事務組合消防本部', 'prefecture_id' => 2],
            ['name' => '八戸地域広域市町村圏事務組合消防本部', 'prefecture_id' => 2],
            ['name' => '五所川原地区消防事務組合消防本部', 'prefecture_id' => 2],
            ['name' => '十和田地域広域事務組合消防本部', 'prefecture_id' => 2],
            ['name' => '三沢市消防本部', 'prefecture_id' => 2],
            ['name' => '下北地域広域行政事務組合消防本部', 'prefecture_id' => 2],
            ['name' => 'つがる市消防本部', 'prefecture_id' => 2],
            ['name' => '北部上北広域事務組合消防本部', 'prefecture_id' => 2],
            ['name' => '中部上北広域事業組合消防本部', 'prefecture_id' => 2],
            ['name' => '鯵ヶ沢地区消防事務組合消防本部', 'prefecture_id' => 2],
            //岩手県
            ['name' => '盛岡地区広域消防組合消防本部', 'prefecture_id' => 3],
            ['name' => '花巻市消防本部', 'prefecture_id' => 3],
            ['name' => '北上地区消防組合消防本部', 'prefecture_id' => 3],
            ['name' => '奥州金ケ崎行政事務組合消防本部', 'prefecture_id' => 3],
            ['name' => '一関市消防本部', 'prefecture_id' => 3],
            ['name' => '大船渡地区消防組合消防本部', 'prefecture_id' => 3],
            ['name' => '陸前高田市消防本部', 'prefecture_id' => 3],
            ['name' => '遠野市消防本部', 'prefecture_id' => 3],
            ['name' => '釜石大槌地区行政事務組合消防本部', 'prefecture_id' => 3],
            ['name' => '宮古地区広域行政組合消防本部', 'prefecture_id' => 3],
            ['name' => '久慈広域連合消防本部', 'prefecture_id' => 3],
            ['name' => '二戸地区広域行政事務組合消防本部', 'prefecture_id' => 3],
        ];

        foreach ($fireDepartments as $department) {
            FireDepartment::create($department);
        }
    }
}
