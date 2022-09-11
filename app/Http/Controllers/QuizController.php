<?php

namespace App\Http\Controllers;

class QuizController extends Controller
{
    public function quizGuide()
    {
        return view('user.quiz_guide');
    }

    public function quizCreate()
    {
        return view('user.quiz');
    }

    public function quizStore()
    {
        // code...
    }

    public function quizScore()
    {
        // code...
    }
}
