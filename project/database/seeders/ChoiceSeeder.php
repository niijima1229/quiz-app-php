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
                'quiz_id' => 1,
                'name' => 'たかわ',
                'is_correct' => false,
            ],
            [
                'quiz_id' => 1,
                'name' => 'たかなわ',
                'is_correct' => true,
            ],
            [
                'quiz_id' => 1,
                'name' => 'たかわわ',
                'is_correct' => false,
            ],
            [
                'quiz_id' => 2,
                'name' => 'かめいど',
                'is_correct' => true,
            ],
            [
                'quiz_id' => 2,
                'name' => 'かめど',
                'is_correct' => false,
            ],
            [
                'quiz_id' => 2,
                'name' => 'かめと',
                'is_correct' => false,
            ],
            [
                'quiz_id' => 3,
                'name' => 'こうじまち',
                'is_correct' => true,
            ],
            [
                'quiz_id' => 3,
                'name' => 'かゆまち',
                'is_correct' => false,
            ],
            [
                'quiz_id' => 3,
                'name' => 'おかとまち',
                'is_correct' => false,
            ],
        ];
        Choice::insert($data);
    }
}
