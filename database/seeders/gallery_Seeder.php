<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class gallery_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('galleries')->insert([
            [
                'event_name'=>'Opening ceremony',
                'event_dec'=>'The Great Event of AIKTC',
                'event_day'=>'1',
                'event_pic'=>"https://download.easyaiktc.workers.dev/Imgs/img2.JPG"
            ],
            [
                'event_name'=>'MR.Abdul razzak honutogi sir and burhan haris sir',
                'event_dec'=>'Hard working persons of AIKTC ',
                'event_day'=>'1',
                'event_pic'=>"https://download.easyaiktc.workers.dev/Imgs/img3.JPG"
            ],
            [
                'event_name'=>'Sports',
                'event_dec'=>' Lets Defeat Ego ',
                'event_day'=>'1',
                'event_pic'=>"https://download.easyaiktc.workers.dev/Imgs/img1.JPG"
            ]

        ]);
    }
}
