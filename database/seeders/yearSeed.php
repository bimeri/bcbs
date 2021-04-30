<?php

namespace Database\Seeders;

use App\Models\Year;
use Illuminate\Database\Seeder;

class yearSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $years = [
                ['name' => '2020/2021', 'active' => 1],
                ['name' => '2021/2022'],
                ['name' => '2022/2023'],
                ['name' => '2023/2024'],
                ['name' => '2024/2025'],
                ['name' => '2025/2026'],
                ['name' => '2026/2027'],
                ['name' => '2027/2028'],
                ['name' => '2028/2029'],
                ['name' => '2029/2030']
        ];
        foreach($years as $year) {
            Year::create($year);
        }
    }
}
