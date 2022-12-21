<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Choice;

class ChoiceSeeder extends Seeder
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
                'question_id' => 1,
                'name' => 'たかわ',
                'is_correct' => false,
            ],
            [
                'question_id' => 1,
                'name' => 'たかなわ',
                'is_correct' => true,
            ],
            [
                'question_id' => 1,
                'name' => 'たかわわ',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'name' => 'かめいど',
                'is_correct' => true,
            ],
            [
                'question_id' => 2,
                'name' => 'かめど',
                'is_correct' => false,
            ],
            [
                'question_id' => 2,
                'name' => 'かめと',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'name' => 'こうじまち',
                'is_correct' => true,
            ],
            [
                'question_id' => 3,
                'name' => 'かゆまち',
                'is_correct' => false,
            ],
            [
                'question_id' => 3,
                'name' => 'おかとまち',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'name' => 'むかいなだ',
                'is_correct' => true,
            ],
            [
                'question_id' => 4,
                'name' => 'むこうひら',
                'is_correct' => false,
            ],
            [
                'question_id' => 4,
                'name' => 'むきひら',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'name' => 'みよし',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'name' => 'おしらべ',
                'is_correct' => false,
            ],
            [
                'question_id' => 5,
                'name' => 'みつぎ',
                'is_correct' => true,
            ],
            [
                'question_id' => 6,
                'name' => 'ぎんざん',
                'is_correct' => false,
            ],
            [
                'question_id' => 6,
                'name' => 'かなやま',
                'is_correct' => true,
            ],
            [
                'question_id' => 6,
                'name' => 'きやま',
                'is_correct' => false,
            ],
        ];
        Choice::insert($data);
    }
}
