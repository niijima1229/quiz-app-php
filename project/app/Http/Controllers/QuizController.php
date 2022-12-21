<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index($id = 1)
    {
        $quiz = Quiz::find($id);
        return view('quiz.index', compact('quiz'));
    }
}
