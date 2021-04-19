<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class settingSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $settings = [
            [
                'school_name' => 'Buea College of Biblical Studies',
                'motto' => 'Train Faithful men who will train others for the sevice of the Lord',
                'logo' => 'lo.jfif',
                'lecture_hour' => '2hr',
            ]
        ];
        foreach($settings as $s){
            Setting::create($s);
        }
    }
}
