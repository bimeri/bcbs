<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class studentSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $user = [
            [
               'first_name'=>'Bimeri',
               'other_name'=>'Noel',
               'email'=>'bimerinoel@gmail.com',
               'profile'=>'image/profiles/2.png',
               'gender'=>'male',
               'school_id'=>'BCB21A01',
               'date_of_birth'=>'12/17/1997',
               'password'=> bcrypt('Bimeri@89'),
               'program'=> 'Bachelor degree',
               'department'=> 'Engineering',
               'date_enrolled'=> '12/17/2021'
            ],
            [
                'first_name'=>'John',
                'other_name'=>'Smith',
                'email'=>'john.smith@gmail.com',
                'profile'=>'image/profiles/2.png',
                'gender'=>'male',
                'school_id'=>'BCB21A02',
                'date_of_birth'=>'12/17/1998',
                'password'=> bcrypt('Bimeri@89'),
                'program'=> 'Bachelor degree',
                'department'=> 'Engineering',
                'date_enrolled'=> '12/17/2021'
             ],
        ];

        foreach ($user as $key => $value) {
            Student::create($value);
        }
    }
}
