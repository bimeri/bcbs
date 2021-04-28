<?php

namespace Database\Seeders;

use App\Models\Semester;
use Illuminate\Database\Seeder;

class semesterSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $semesters = [
            [
                'name' => 'First Semester',
                'active' => 1
            ],
            [
                'name' => 'Second Semster',
                'active' => 0
            ],
            [
                'name' => 'Resit Semester',
                'active' => 0
            ]
        ];
        foreach($semesters as $semester) {
            Semester::create($semester);
        }
    }
}
