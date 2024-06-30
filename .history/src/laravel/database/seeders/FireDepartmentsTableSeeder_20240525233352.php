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
        ];
    }
}
