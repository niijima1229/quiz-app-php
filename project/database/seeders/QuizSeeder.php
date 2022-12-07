<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Quiz;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'img_link' => 'img/takanawa.png'
            ],
            [
                'img_link' => 'img/kameido.png'
            ],
            [
                'img_link' => 'img/koujimati.png'
            ]
        ];
        Quiz::insert($data);
    }
}
