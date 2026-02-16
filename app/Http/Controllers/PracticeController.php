<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Data\PracticeQuestions;

class PracticeController extends Controller
{
    public function index()
    {
        return view('practice.index');
    }

    public function start(Request $request)
    {
        $grade = (int) $request->input('grade');
        
        if (!in_array($grade, [3, 4, 5])) {
            return response()->json(['error' => 'Invalid grade'], 400);
        }

        $questions = PracticeQuestions::getQuestionsByGrade($grade);
        
        if (empty($questions)) {
            return response()->json(['error' => 'No questions found for this grade'], 404);
        }

        // Shuffle questions for variety
        shuffle($questions);

        return response()->json([
            'questions' => $questions,
            'grade' => $grade,
            'total' => count($questions)
        ]);
    }

    public function play()
    {
        return view('practice.play');
    }

    public function submitAnswer(Request $request)
    {
        $questionIndex = $request->input('questionIndex');
        $selectedAnswer = $request->input('selectedAnswer');
        $grade = $request->input('grade');
        $questions = $request->input('questions'); // Array of all questions

        if (!isset($questions[$questionIndex])) {
            return response()->json(['error' => 'Invalid question index'], 400);
        }

        $question = $questions[$questionIndex];
        $isCorrect = ($selectedAnswer == $question['correctAnswer']);

        return response()->json([
            'isCorrect' => $isCorrect,
            'correctAnswer' => $question['correctAnswer'],
            'selectedAnswer' => $selectedAnswer
        ]);
    }

    public function results(Request $request)
    {
        // Results are stored in client-side sessionStorage, not server session
        // Just return the view - JavaScript will handle loading results
        return view('practice.results');
    }
}

