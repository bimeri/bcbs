<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Seeder;

class adminSeed extends Seeder
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
               'user_name'=>'noel',
               'email'=>'bimerinoel@gmail.com',
               'profile'=>'image/profiles/2.png',
               'gender'=>'male',
               'lang'=>'en',
               'date_of_birth'=>'12/17/1997',
               'password'=> bcrypt('Magaza@890'),
            ],
        ];

        foreach ($user as $key => $value) {
            Admin::create($value);
        }
    }
}
