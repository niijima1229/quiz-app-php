<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
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
                'quiz_id' => 1,
                'img_link' => 'img/takanawa.png',
                'answer' => 'たかなわ'
            ],
            [
                'quiz_id' => 1,
                'img_link' => 'img/kameido.png',
                'answer' => 'かめいど'
            ],
            [
                'quiz_id' => 1,
                'img_link' => 'img/koujimati.png',
                'answer' => 'こうじまち'
            ]
        ];
        Question::insert($data);
    }
}
