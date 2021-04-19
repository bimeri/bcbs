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
            ],
            [
                'name' => 'Second Semster',
            ],
            [
                'name' => 'Resit Semester',
            ]
        ];
        foreach($semesters as $semester) {
            Semester::create($semester);
        }
    }
}
