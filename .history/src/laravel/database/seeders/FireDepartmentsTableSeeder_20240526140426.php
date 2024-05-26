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
            //宮城県
            ['name' => '仙台市消防局', 'prefecture_id' => 4],
            ['name' => '名取市消防本部', 'prefecture_id' => 4],
            ['name' => '仙南地域広域行政事務組合消防本部', 'prefecture_id' => 4],
            ['name' => '塩釜地区消防事務組合消防本部', 'prefecture_id' => 4],
            ['name' => 'あぶくま消防本部', 'prefecture_id' => 4],
            ['name' => '黒川地域行政事務組合消防本部', 'prefecture_id' => 4],
            ['name' => '大崎地域広域行政事務組合消防本部', 'prefecture_id' => 4],
            ['name' => '栗原市消防本部', 'prefecture_id' => 4],
            ['name' => '登米市消防本部', 'prefecture_id' => 4],
            ['name' => '石巻地区広域行政事務組合消防本部', 'prefecture_id' => 4],
            ['name' => '気仙沼・本吉地域広域行政事務組合消防本部', 'prefecture_id' => 4],
            //秋田県
            ['name' => '秋田市消防本部', 'prefecture_id' => 5],
            ['name' => '大館市消防本部', 'prefecture_id' => 5],
            ['name' => '北秋田市消防本部', 'prefecture_id' => 5],
            ['name' => '由利本荘市消防本部', 'prefecture_id' => 5],
            ['name' => 'にかほ市消防本部', 'prefecture_id' => 5],
            ['name' => '横手市消防本部', 'prefecture_id' => 5],
            ['name' => '五城目町消防本部', 'prefecture_id' => 5],
            ['name' => '鹿角広域行政組合消防本部', 'prefecture_id' => 5],
            ['name' => '能代山本広域市町村圏組合消防本部', 'prefecture_id' => 5],
            ['name' => '湖東地区行政一部事務組合消防本部', 'prefecture_id' => 5],
            ['name' => '男鹿地区消防一部事務組合消防本部', 'prefecture_id' => 5],
            ['name' => '大曲仙北広域市町村圏組合消防本部', 'prefecture_id' => 5],
            ['name' => '湯沢雄勝広域市町村圏組合消防本部', 'prefecture_id' => 5],
            // 山形県
            ['name' => '山形市消防本部', 'prefecture_id' => 6],
            ['name' => '上山市消防本部', 'prefecture_id' => 6],
            ['name' => '天童市消防本部', 'prefecture_id' => 6],
            ['name' => '西村山広域行政事務組合消防本部', 'prefecture_id' => 6],
            ['name' => '村山市消防本部', 'prefecture_id' => 6],
            ['name' => '東根市消防本部', 'prefecture_id' => 6],
            ['name' => '尾花沢市消防本部', 'prefecture_id' => 6],
            ['name' => '最上広域市町村圏事務組合消防本部', 'prefecture_id' => 6],
            ['name' => '置賜広域行政事務組合消防本部', 'prefecture_id' => 6],
            ['name' => '西置賜行政組合消防本部', 'prefecture_id' => 6],
            ['name' => '鶴岡市消防本部', 'prefecture_id' => 6],
            ['name' => '酒田地区広域行政組合消防本部', 'prefecture_id' => 6],
            // 福島県
            ['name' => '福島市消防本部', 'prefecture_id' => 7],
            ['name' => 'いわき市消防本部', 'prefecture_id' => 7],
            ['name' => '伊達地方消防組合消防本部', 'prefecture_id' => 7],
            ['name' => '安達地方広域行政組合消防本部', 'prefecture_id' => 7],
            ['name' => '郡山地方広域消防組合消防本部', 'prefecture_id' => 7],
            ['name' => '須賀川地方広域消防本部', 'prefecture_id' => 7],
            ['name' => '白河地方広域市町村圏消防本部', 'prefecture_id' => 7],
            ['name' => '喜多方地方広域市町村圏組合消防本部', 'prefecture_id' => 7],
            ['name' => '会津若松地方広域市町村圏整備組合消防本部', 'prefecture_id' => 7],
            ['name' => '南会津地方広域市町村圏組合消防本部', 'prefecture_id' => 7],
            ['name' => '相馬地方広域消防本部', 'prefecture_id' => 7],
            ['name' => '双葉地方広域市町村圏組合消防本部', 'prefecture_id' => 7],
            // 茨城県
            ['name' => '水戸市消防局', 'prefecture_id' => 8],
            ['name' => '日立市消防本部', 'prefecture_id' => 8],
            ['name' => '土浦市消防本部', 'prefecture_id' => 8],
            ['name' => '石岡市消防本部', 'prefecture_id' => 8],
            ['name' => '常陸太田市消防本部', 'prefecture_id' => 8],
            ['name' => '高萩市消防本部', 'prefecture_id' => 8],
            ['name' => '北茨城市消防本部', 'prefecture_id' => 8],
            ['name' => '笠間市消防本部', 'prefecture_id' => 8],
            ['name' => '取手市消防本部', 'prefecture_id' => 8],
            ['name' => 'つくば市消防本部', 'prefecture_id' => 8],
            ['name' => 'ひたちなか・東海広域事務組合消防本部', 'prefecture_id' => 8],
            ['name' => '常陸大宮市消防本部', 'prefecture_id' => 8],
            ['name' => '那珂市消防本部', 'prefecture_id' => 8],
            ['name' => 'かすみがうら市消防本部', 'prefecture_id' => 8],
            ['name' => '小美玉市消防本部', 'prefecture_id' => 8],
            ['name' => '茨城町消防本部', 'prefecture_id' => 8],
            ['name' => '大洗町消防本部', 'prefecture_id' => 8],
            ['name' => '大子町消防本部', 'prefecture_id' => 8],
            ['name' => '鹿島地方事務組合消防本部', 'prefecture_id' => 8],
            ['name' => '常総地方広域市町村圏事務組合消防本部', 'prefecture_id' => 8],
            ['name' => '茨城西南地方広域市町村圏事務組合消防本部', 'prefecture_id' => 8],
            ['name' => '筑西広域市町村圏事務組合消防本部', 'prefecture_id' => 8],
            ['name' => '鹿行広域事務組合消防本部', 'prefecture_id' => 8],
            ['name' => '稲敷広域消防本部', 'prefecture_id' => 8],
            // 栃木県
            ['name' => '宇都宮市消防局', 'prefecture_id' => 9],
            ['name' => '足利市消防本部', 'prefecture_id' => 9],
            ['name' => '栃木市消防本部', 'prefecture_id' => 9],
            ['name' => '佐野市消防本部', 'prefecture_id' => 9],
            ['name' => '鹿沼市消防本部', 'prefecture_id' => 9],
            ['name' => '日光市消防本部', 'prefecture_id' => 9],
            ['name' => '小山市消防本部', 'prefecture_id' => 9],
            ['name' => '芳賀地区広域行政事務組合消防本部', 'prefecture_id' => 9],
            ['name' => '那須地区消防組合消防本部', 'prefecture_id' => 9],
            ['name' => '塩谷広域行政組合消防本部', 'prefecture_id' => 9],
            ['name' => '南那須地区広域行政事務組合消防本部', 'prefecture_id' => 9],
            ['name' => '石橋地区消防組合消防本部', 'prefecture_id' => 9],
            // 群馬県
            ['name' => '前橋市消防局', 'prefecture_id' => 10],
            ['name' => '高崎市等広域消防局', 'prefecture_id' => 10],
            ['name' => '桐生市消防本部', 'prefecture_id' => 10],
            ['name' => '伊勢崎市消防本部', 'prefecture_id' => 10],
            ['name' => '太田市消防本部', 'prefecture_id' => 10],
            ['name' => '利根沼田広域消防本部', 'prefecture_id' => 10],
            ['name' => '館林地区消防組合消防本部', 'prefecture_id' => 10],
            ['name' => '渋川広域消防本部', 'prefecture_id' => 10],
            ['name' => '多野藤岡広域市町村圏振興整備組合消防本部', 'prefecture_id' => 10],
            ['name' => '富岡甘楽広域市町村圏振興整備組合消防本部', 'prefecture_id' => 10],
            ['name' => '吾妻広域町村圏振興整備組合消防本部', 'prefecture_id' => 10],
            // 埼玉県
            ['name' => 'さいたま市消防局', 'prefecture_id' => 11],
            ['name' => '川口市消防局', 'prefecture_id' => 11],
            ['name' => '川越地区消防局', 'prefecture_id' => 11],
            ['name' => '熊谷市消防本部', 'prefecture_id' => 11],
            ['name' => '行田市消防本部', 'prefecture_id' => 11],
            ['name' => '秩父消防本部', 'prefecture_id' => 11],
            ['name' => '埼玉西部消防局', 'prefecture_id' => 11],
            ['name' => '埼玉東部消防組合消防局', 'prefecture_id' => 11],
            ['name' => '児玉郡市広域消防本部', 'prefecture_id' => 11],
            ['name' => '比企広域消防本部', 'prefecture_id' => 11],
            ['name' => '春日部市消防本部', 'prefecture_id' => 11],
            ['name' => '羽生市消防本部', 'prefecture_id' => 11],
            ['name' => '埼玉県央広域消防本部', 'prefecture_id' => 11],
            ['name' => '深谷市消防本部', 'prefecture_id' => 11],
            ['name' => '上尾市消防本部', 'prefecture_id' => 11],
            ['name' => '草加八潮消防局', 'prefecture_id' => 11],
            ['name' => '越谷市消防局', 'prefecture_id' => 11],
            ['name' => '蕨市消防本部', 'prefecture_id' => 11],
            ['name' => '戸田市消防本部', 'prefecture_id' => 11],
            ['name' => '埼玉県南西部消防局', 'prefecture_id' => 11],
            ['name' => '入間東部地区事務組合消防本部', 'prefecture_id' => 11],
            ['name' => '三郷市消防本部', 'prefecture_id' => 11],
            ['name' => '蓮田市消防本部', 'prefecture_id' => 11],
            ['name' => '坂戸・鶴ヶ島消防組合消防本部', 'prefecture_id' => 11],
            ['name' => '吉川松伏消防組合消防本部', 'prefecture_id' => 11],
            ['name' => '西入間広域消防組合消防本部', 'prefecture_id' => 11],
            //千葉県
            ['name' => '千葉市消防局', 'prefecture_id' => 12],
            ['name' => '銚子市消防本部', 'prefecture_id' => 12],
            ['name' => '市川市消防局', 'prefecture_id' => 12],
            ['name' => '船橋市消防局', 'prefecture_id' => 12],
            ['name' => '安房郡市広域市町村圏事務組合消防本部', 'prefecture_id' => 12],
            ['name' => '木更津市消防本部', 'prefecture_id' => 12],
            ['name' => '松戸市消防局', 'prefecture_id' => 12],
            ['name' => '野田市消防本部', 'prefecture_id' => 12],
            ['name' => '長生郡市広域市町村圏組合消防本部', 'prefecture_id' => 12],
            ['name' => '成田市消防本部', 'prefecture_id' => 12],
            ['name' => '佐倉市八街市酒々井町消防組合消防本部', 'prefecture_id' => 12],
            ['name' => '山武郡市広域行政組合消防本部', 'prefecture_id' => 12],
            ['name' => '旭市消防本部', 'prefecture_id' => 12],
            ['name' => '習志野市消防本部', 'prefecture_id' => 12],
            ['name' => '柏市消防局', 'prefecture_id' => 12],
            ['name' => '夷隅郡市広域市町村圏事務組合消防本部', 'prefecture_id' => 12],
            ['name' => '市原市消防局', 'prefecture_id' => 12],
            ['name' => '流山市消防本部', 'prefecture_id' => 12],
            ['name' => '八千代市消防本部', 'prefecture_id' => 12],
            ['name' => '我孫子市消防本部', 'prefecture_id' => 12],
            ['name' => '鎌ケ谷市消防本部', 'prefecture_id' => 12],
            ['name' => '君津市消防本部', 'prefecture_id' => 12],
            ['name' => '富津市消防本部', 'prefecture_id' => 12],
            ['name' => '浦安市消防本部', 'prefecture_id' => 12],
            ['name' => '四街道市消防本部', 'prefecture_id' => 12],
            ['name' => '袖ケ浦市消防本部', 'prefecture_id' => 12],
            ['name' => '印西地区消防組合消防本部', 'prefecture_id' => 12],
            ['name' => '匝瑳市横芝光町消防組合消防本部', 'prefecture_id' => 12],
            ['name' => '香取広域市町村圏事務組合消防本部', 'prefecture_id' => 12],
            ['name' => '富里市消防本部', 'prefecture_id' => 12],
            ['name' => '栄町消防本部', 'prefecture_id' => 12],
            // 東京都
            ['name' => '東京消防庁', 'prefecture_id' => 13],
            ['name' => '稲城市消防本部', 'prefecture_id' => 13],
            ['name' => '大島町消防本部', 'prefecture_id' => 13],
            ['name' => '三宅村消防本部', 'prefecture_id' => 13],
            ['name' => '八丈町消防本部', 'prefecture_id' => 13],
            // 神奈川県
            ['name' => '横浜市消防局', 'prefecture_id' => 14],
            ['name' => '川崎市消防局', 'prefecture_id' => 14],
            ['name' => '相模原市消防局', 'prefecture_id' => 14],
            ['name' => '横須賀市消防局', 'prefecture_id' => 14],
            ['name' => '藤沢市消防局', 'prefecture_id' => 14],
            ['name' => '平塚市消防本部', 'prefecture_id' => 14],
            ['name' => '鎌倉市消防本部', 'prefecture_id' => 14],
            ['name' => '小田原市消防本部', 'prefecture_id' => 14],
            ['name' => '茅ヶ崎市消防本部', 'prefecture_id' => 14],
            ['name' => '逗子市消防本部', 'prefecture_id' => 14],
            ['name' => '厚木市消防本部', 'prefecture_id' => 14],
            ['name' => '大和市消防本部', 'prefecture_id' => 14],
            ['name' => '秦野市消防本部', 'prefecture_id' => 14],
            ['name' => '伊勢原市消防本部', 'prefecture_id' => 14],
            ['name' => '座間市消防本部', 'prefecture_id' => 14],
            ['name' => '海老名市消防本部', 'prefecture_id' => 14],
            ['name' => '綾瀬市消防本部', 'prefecture_id' => 14],
            ['name' => '大磯町消防本部', 'prefecture_id' => 14],
            ['name' => '葉山町消防本部', 'prefecture_id' => 14],
            ['name' => '湯河原町消防本部', 'prefecture_id' => 14],
            ['name' => '箱根町消防本部', 'prefecture_id' => 14],
            ['name' => '二宮町消防本部', 'prefecture_id' => 14],
            ['name' => '愛川町消防本部', 'prefecture_id' => 14],
            // 新潟県
            ['name' => '新潟市消防局', 'prefecture_id' => 15],
            ['name' => '長岡市消防本部', 'prefecture_id' => 15],
            ['name' => '三条市消防本部', 'prefecture_id' => 15],
            ['name' => '柏崎市消防本部', 'prefecture_id' => 15],
            ['name' => '見附市消防本部', 'prefecture_id' => 15],
            ['name' => '糸魚川市消防本部', 'prefecture_id' => 15],
            ['name' => '五泉市消防本部', 'prefecture_id' => 15],
            ['name' => '阿賀野市消防本部', 'prefecture_id' => 15],
            ['name' => '佐渡市消防本部', 'prefecture_id' => 15],
            ['name' => '魚沼市消防本部', 'prefecture_id' => 15],
            ['name' => '南魚沼市消防本部', 'prefecture_id' => 15],
            ['name' => '阿賀町消防本部', 'prefecture_id' => 15],
            ['name' => '小千谷市消防本部', 'prefecture_id' => 15],
            ['name' => '加茂地域消防本部', 'prefecture_id' => 15],
            ['name' => '燕・弥彦総合事務組合消防本部', 'prefecture_id' => 15],
            ['name' => '新発田地域広域消防本部', 'prefecture_id' => 15],
            ['name' => '十日町地域消防本部', 'prefecture_id' => 15],
            ['name' => '上越地域消防局', 'prefecture_id' => 15],
            ['name' => '村上市消防本部', 'prefecture_id' => 15],
            // 富山県
            ['name' => '富山市消防局', 'prefecture_id' => 16],
            ['name' => '高岡市消防本部', 'prefecture_id' => 16],
            ['name' => '射水市消防本部', 'prefecture_id' => 16],
            ['name' => '立山町消防本部', 'prefecture_id' => 16],
            ['name' => '砺波地域消防組合消防本部', 'prefecture_id' => 16],
            ['name' => '富山県東部消防組合消防本部', 'prefecture_id' => 16],
            ['name' => '新川地域消防組合消防本部', 'prefecture_id' => 16],
            // 石川県
            ['name' => '金沢市消防局', 'prefecture_id' => 17],
            ['name' => '小松市消防本部', 'prefecture_id' => 17],
            ['name' => '加賀市消防本部', 'prefecture_id' => 17],
            ['name' => 'かほく市消防本部', 'prefecture_id' => 17],
            ['name' => '七尾鹿島消防本部', 'prefecture_id' => 17],
            ['name' => '津幡町消防本部', 'prefecture_id' => 17],
            ['name' => '内灘町消防本部', 'prefecture_id' => 17],
            ['name' => '能美市消防本部', 'prefecture_id' => 17],
            ['name' => '羽咋郡市広域圏事務組合消防本部', 'prefecture_id' => 17],
            ['name' => '白山野々市広域消防本部', 'prefecture_id' => 17],
            ['name' => '奥能登広域圏事務組合消防本部', 'prefecture_id' => 17],
            // 福井県
            ['name' => '福井市消防局', 'prefecture_id' => 18],
            ['name' => '大野市消防本部', 'prefecture_id' => 18],
            ['name' => '勝山市消防本部', 'prefecture_id' => 18],
            ['name' => '永平寺町消防本部', 'prefecture_id' => 18],
            ['name' => '嶺北消防組合消防本部', 'prefecture_id' => 18],
            ['name' => '鯖江・丹生消防組合消防本部', 'prefecture_id' => 18],
            ['name' => '南越消防組合消防本部', 'prefecture_id' => 18],
            ['name' => '敦賀美方消防組合消防本部', 'prefecture_id' => 18],
            ['name' => '若狭消防組合消防本部', 'prefecture_id' => 18],
            // 山梨県
            ['name' => '甲府地区広域行政事務組合消防本部', 'prefecture_id' => 19],
            ['name' => '都留市消防本部', 'prefecture_id' => 19],
            ['name' => '富士五湖広域行政事務組合富士五湖消防本部', 'prefecture_id' => 19],
            ['name' => '大月市消防本部', 'prefecture_id' => 19],
            ['name' => '峡北広域行政事務組合消防本部', 'prefecture_id' => 19],
            ['name' => '笛吹市消防本部', 'prefecture_id' => 19],
            ['name' => '峡南広域行政組合消防本部', 'prefecture_id' => 19],
            ['name' => '東山梨行政事務組合東山梨消防本部', 'prefecture_id' => 19],
            ['name' => '上野原市消防本部', 'prefecture_id' => 19],
            ['name' => '南アルプス市消防本部', 'prefecture_id' => 19],
            // 長野県
            ['name' => '佐久広域連合消防本部', 'prefecture_id' => 20],
            ['name' => '上田地域広域連合消防本部', 'prefecture_id' => 20],
            ['name' => '諏訪広域消防本部', 'prefecture_id' => 20],
            ['name' => '上伊那広域消防本部', 'prefecture_id' => 20],
            ['name' => '飯田広域消防本部', 'prefecture_id' => 20],
            ['name' => '木曽広域消防本部', 'prefecture_id' => 20],
            ['name' => '松本広域消防局', 'prefecture_id' => 20],
            ['name' => '北アルプス広域消防本部', 'prefecture_id' => 20],
            ['name' => '千曲坂城消防本部', 'prefecture_id' => 20],
            ['name' => '長野市消防局', 'prefecture_id' => 20],
            ['name' => '須坂市消防本部', 'prefecture_id' => 20],
            ['name' => '岳南広域消防本部', 'prefecture_id' => 20],
            ['name' => '岳北消防本部', 'prefecture_id' => 20],
            // 岐阜県
            ['name' => '岐阜市消防本部', 'prefecture_id' => 21],
            ['name' => '多治見市消防本部', 'prefecture_id' => 21],
            ['name' => '中津川市消防本部', 'prefecture_id' => 21],
            ['name' => '瑞浪市消防本部', 'prefecture_id' => 21],
            ['name' => '羽島市消防本部', 'prefecture_id' => 21],
            ['name' => '恵那市消防本部', 'prefecture_id' => 21],
            ['name' => '土岐市消防本部', 'prefecture_id' => 21],
            ['name' => '各務原市消防本部', 'prefecture_id' => 21],
            ['name' => '飛騨市消防本部', 'prefecture_id' => 21],
            ['name' => '郡上市消防本部', 'prefecture_id' => 21],
            ['name' => '下呂市消防本部', 'prefecture_id' => 21],
            ['name' => '高山市消防本部', 'prefecture_id' => 21],
            ['name' => '海津市消防本部', 'prefecture_id' => 21],
            ['name' => '養老町消防本部', 'prefecture_id' => 21],
            ['name' => '羽島郡広域連合消防本部', 'prefecture_id' => 21],
            ['name' => '不破消防組合消防本部', 'prefecture_id' => 21],
            ['name' => '揖斐郡消防組合消防本部', 'prefecture_id' => 21],
            ['name' => '大垣消防組合消防本部', 'prefecture_id' => 21],
            ['name' => '中濃消防組合消防本部', 'prefecture_id' => 21],
            ['name' => '可茂消防事務組合消防本部', 'prefecture_id' => 21],
            // 静岡県
            ['name' => '静岡市消防局', 'prefecture_id' => 22],
            ['name' => '浜松市消防局', 'prefecture_id' => 22],
            ['name' => '駿東伊豆消防本部', 'prefecture_id' => 22],
            ['name' => '熱海市消防本部', 'prefecture_id' => 22],
            ['name' => '富士山南東消防本部', 'prefecture_id' => 22],
            ['name' => '富士市消防本部', 'prefecture_id' => 22],
            ['name' => '志太消防本部', 'prefecture_id' => 22],
            ['name' => '掛川市消防本部', 'prefecture_id' => 22],
            ['name' => '磐田市消防本部', 'prefecture_id' => 22],
            ['name' => '菊川市消防本部', 'prefecture_id' => 22],
            ['name' => '富士宮市消防本部', 'prefecture_id' => 22],
            ['name' => '御殿場市・小山町広域行政組合消防本部', 'prefecture_id' => 22],
            ['name' => '袋井市森町広域行政組合袋井消防本部', 'prefecture_id' => 22],
            ['name' => '下田消防本部', 'prefecture_id' => 22],
            ['name' => '湖西市消防本部', 'prefecture_id' => 22],
            ['name' => '御前崎市消防本部', 'prefecture_id' => 22],
            // 愛知県
            ['name' => '名古屋市消防局', 'prefecture_id' => 23],
            ['name' => '豊田市消防本部', 'prefecture_id' => 23],
            ['name' => '尾三消防本部', 'prefecture_id' => 23],
            ['name' => '岡崎市消防本部', 'prefecture_id' => 23],
            ['name' => '幸田町消防本部', 'prefecture_id' => 23],
            ['name' => '蒲郡市消防本部', 'prefecture_id' => 23],
            ['name' => '豊川市消防本部', 'prefecture_id' => 23],
            ['name' => '豊橋市消防本部', 'prefecture_id' => 23],
            ['name' => '田原市消防本部', 'prefecture_id' => 23],
            ['name' => '新城市消防本部', 'prefecture_id' => 23],
            ['name' => '西尾市消防本部', 'prefecture_id' => 23],
            ['name' => '衣浦東部広域連合消防局', 'prefecture_id' => 23],
            ['name' => '大府市消防本部', 'prefecture_id' => 23],
            ['name' => '知多市消防本部', 'prefecture_id' => 23],
            ['name' => '東海市消防本部', 'prefecture_id' => 23],
            ['name' => '常滑市消防本部', 'prefecture_id' => 23],
            ['name' => '知多中部広域事務組合消防本部', 'prefecture_id' => 23],
            ['name' => '知多南部消防組合消防本部', 'prefecture_id' => 23],
            ['name' => '瀬戸市消防本部', 'prefecture_id' => 23],
            ['name' => '尾張旭市消防本部', 'prefecture_id' => 23],
            ['name' => '犬山市消防本部', 'prefecture_id' => 23],
            ['name' => '江南市消防本部', 'prefecture_id' => 23],
            ['name' => '岩倉市消防本部', 'prefecture_id' => 23],
            ['name' => '春日井市消防本部', 'prefecture_id' => 23],
            ['name' => '小牧市消防本部', 'prefecture_id' => 23],
            ['name' => '一宮市消防本部', 'prefecture_id' => 23],
            ['name' => '稲沢市消防本部', 'prefecture_id' => 23],
            ['name' => '津島市消防本部', 'prefecture_id' => 23],
            ['name' => '愛西市消防本部', 'prefecture_id' => 23],
            ['name' => '蟹江町消防本部', 'prefecture_id' => 23],
            ['name' => '海部東部消防組合', 'prefecture_id' => 23],
            ['name' => '海部南部消防組合', 'prefecture_id' => 23],
            ['name' => '丹羽広域事務組合消防本部', 'prefecture_id' => 23],
            ['name' => '西春日井広域事務組合消防本部', 'prefecture_id' => 23],
            // 三重県
            ['name' => '桑名市消防本部', 'prefecture_id' => 24],
            ['name' => '四日市市消防本部', 'prefecture_id' => 24],
            ['name' => '菰野町消防本部', 'prefecture_id' => 24],
            ['name' => '鈴鹿市消防本部', 'prefecture_id' => 24],
            ['name' => '亀山市消防本部', 'prefecture_id' => 24],
            ['name' => '津市消防本部', 'prefecture_id' => 24],
            ['name' => '松阪地区広域消防組合消防本部', 'prefecture_id' => 24],
            ['name' => '伊勢市消防本部', 'prefecture_id' => 24],
            ['name' => '鳥羽市消防本部', 'prefecture_id' => 24],
            ['name' => '志摩市消防本部', 'prefecture_id' => 24],
            ['name' => '紀勢地区広域消防組合消防本部', 'prefecture_id' => 24],
            ['name' => '三重紀北消防組合消防本部', 'prefecture_id' => 24],
            ['name' => '熊野市消防本部', 'prefecture_id' => 24],
            ['name' => '伊賀市消防本部', 'prefecture_id' => 24],
            ['name' => '名張市消防本部', 'prefecture_id' => 24],
            // 滋賀県
            ['name' => '大津市消防局', 'prefecture_id' => 25],
            ['name' => '彦根市消防本部', 'prefecture_id' => 25],
            ['name' => '高島市消防本部', 'prefecture_id' => 25],
            ['name' => '湖南広域行政組合消防本部', 'prefecture_id' => 25],
            ['name' => '甲賀広域行政組合消防本部', 'prefecture_id' => 25],
            ['name' => '東近江行政組合消防本部', 'prefecture_id' => 25],
            ['name' => '湖北地域消防本部', 'prefecture_id' => 25],
            // 京都府
            ['name' => '京都市消防局', 'prefecture_id' => 26],
            ['name' => '舞鶴市消防本部', 'prefecture_id' => 26],
            ['name' => '福知山市消防本部', 'prefecture_id' => 26],
            ['name' => '宇治市消防本部', 'prefecture_id' => 26],
            ['name' => '綾部市消防本部', 'prefecture_id' => 26],
            ['name' => '京都中部広域消防組合消防本部', 'prefecture_id' => 26],
            ['name' => '宮津与謝消防組合消防本部', 'prefecture_id' => 26],
            ['name' => '城陽市消防本部', 'prefecture_id' => 26],
            ['name' => '八幡市消防本部', 'prefecture_id' => 26],
            ['name' => '京田辺市消防本部', 'prefecture_id' => 26],
            ['name' => '久御山町消防本部', 'prefecture_id' => 26],
            ['name' => '精華町消防本部', 'prefecture_id' => 26],
            ['name' => '相楽中部消防組合消防本部', 'prefecture_id' => 26],
            ['name' => '乙訓消防組合消防本部', 'prefecture_id' => 26],
            ['name' => '京丹後市消防本部', 'prefecture_id' => 26],
            // 大阪府
            ['name' => '大阪市消防局', 'prefecture_id' => 27],
            ['name' => '堺市消防局', 'prefecture_id' => 27],
            ['name' => '岸和田市消防本部', 'prefecture_id' => 27],
            ['name' => '豊中市消防局', 'prefecture_id' => 27],
            ['name' => '池田市消防本部', 'prefecture_id' => 27],
            ['name' => '吹田市消防本部', 'prefecture_id' => 27],
            ['name' => '泉大津市消防本部', 'prefecture_id' => 27],
            ['name' => '高槻市消防本部', 'prefecture_id' => 27],
            ['name' => '貝塚市消防本部', 'prefecture_id' => 27],
            ['name' => '茨木市消防本部', 'prefecture_id' => 27],
            ['name' => '八尾市消防本部', 'prefecture_id' => 27],
            ['name' => '松原市消防本部', 'prefecture_id' => 27],
            ['name' => '和泉市消防本部', 'prefecture_id' => 27],
            ['name' => '箕面市消防本部', 'prefecture_id' => 27],
            ['name' => '摂津市消防本部', 'prefecture_id' => 27],
            ['name' => '東大阪市消防局', 'prefecture_id' => 27],
            ['name' => '交野市消防本部', 'prefecture_id' => 27],
            ['name' => '島本町消防本部', 'prefecture_id' => 27],
            ['name' => '忠岡町消防本部', 'prefecture_id' => 27],
            ['name' => '守口市門真市消防組合消防本部', 'prefecture_id' => 27],
            ['name' => '枚方寝屋川消防組合消防本部', 'prefecture_id' => 27],
            ['name' => '大阪南消防組合・大阪南消防局', 'prefecture_id' => 27],
            ['name' => '泉州南消防組合泉州南広域消防本部', 'prefecture_id' => 27],
            ['name' => '大東四條畷消防組合消防本部', 'prefecture_id' => 27],
            // 兵庫県
            ['name' => '神戸市消防局', 'prefecture_id' => 28],
            ['name' => '姫路市消防局', 'prefecture_id' => 28],
            ['name' => '尼崎市消防局', 'prefecture_id' => 28],
            ['name' => '明石市消防局', 'prefecture_id' => 28],
            ['name' => '西宮市消防局', 'prefecture_id' => 28],
            ['name' => '芦屋市消防本部', 'prefecture_id' => 28],
            ['name' => '伊丹市消防局', 'prefecture_id' => 28],
            ['name' => '豊岡市消防本部', 'prefecture_id' => 28],
            ['name' => '加古川市消防本部', 'prefecture_id' => 28],
            ['name' => '赤穂市消防本部', 'prefecture_id' => 28],
            ['name' => '宝塚市消防本部', 'prefecture_id' => 28],
            ['name' => '三木市消防本部', 'prefecture_id' => 28],
            ['name' => '高砂市消防本部', 'prefecture_id' => 28],
            ['name' => '川西市消防本部', 'prefecture_id' => 28],
            ['name' => '小野市消防本部', 'prefecture_id' => 28],
            ['name' => '三田市消防本部', 'prefecture_id' => 28],
            ['name' => '丹波篠山市消防本部', 'prefecture_id' => 28],
            ['name' => '丹波市消防本部', 'prefecture_id' => 28],
            ['name' => '猪名川町消防本部', 'prefecture_id' => 28],
            ['name' => '淡路広域消防事務組合消防本部', 'prefecture_id' => 28],
            ['name' => '美方広域消防本部', 'prefecture_id' => 28],
            ['name' => '北はりま消防本部', 'prefecture_id' => 28],
            ['name' => '西はりま消防本部', 'prefecture_id' => 28],
            ['name' => '南但消防本部', 'prefecture_id' => 28],
            // 奈良県
            ['name' => '奈良市消防局', 'prefecture_id' => 29],
            ['name' => '生駒市消防本部', 'prefecture_id' => 29],
            ['name' => '奈良県広域消防組合消防本部', 'prefecture_id' => 29],
            // 和歌山県
            ['name' => '和歌山市消防局', 'prefecture_id' => 30],
            ['name' => '海南市消防本部', 'prefecture_id' => 30],
            ['name' => '橋本市消防本部', 'prefecture_id' => 30],
            ['name' => '有田市消防本部', 'prefecture_id' => 30],
            ['name' => '御坊市消防本部', 'prefecture_id' => 30],
            ['name' => '田辺市消防本部', 'prefecture_id' => 30],
            ['name' => '新宮市消防本部', 'prefecture_id' => 30],
            ['name' => '紀美野町消防本部', 'prefecture_id' => 30],
            ['name' => '那賀消防組合消防本部', 'prefecture_id' => 30],
            ['name' => '高野町消防本部', 'prefecture_id' => 30],
            ['name' => '伊都消防組合消防本部', 'prefecture_id' => 30],
            ['name' => '湯浅広川消防組合消防本部', 'prefecture_id' => 30],
            ['name' => '有田川町消防本部', 'prefecture_id' => 30],
            ['name' => '日高広域消防事務組合消防本部', 'prefecture_id' => 30],
            ['name' => '白浜町消防本部', 'prefecture_id' => 30],
            ['name' => '串本町消防本部', 'prefecture_id' => 30],
            ['name' => '那智勝浦町消防本部', 'prefecture_id' => 30],
            // 鳥取県
            ['name' => '鳥取県東部広域行政管理組合消防局', 'prefecture_id' => 31],
            ['name' => '鳥取県西部広域行政管理組合消防局', 'prefecture_id' => 31],
            ['name' => '鳥取中部ふるさと広域連合消防局', 'prefecture_id' => 31],
            // 島根県
            ['name' => '松江市消防本部', 'prefecture_id' => 32],
            ['name' => '安来市消防本部', 'prefecture_id' => 32],
            ['name' => '雲南消防本部', 'prefecture_id' => 32],
            ['name' => '出雲市消防本部', 'prefecture_id' => 32],
            ['name' => '大田市消防本部', 'prefecture_id' => 32],
            ['name' => '江津邑智消防組合消防本部', 'prefecture_id' => 32],
            ['name' => '浜田市消防本部', 'prefecture_id' => 32],
            ['name' => '益田広域消防本部', 'prefecture_id' => 32],
            ['name' => '隠岐広域連合消防本部', 'prefecture_id' => 32],
        ];

        foreach ($fireDepartments as $department) {
            FireDepartment::create($department);
        }
    }
}
