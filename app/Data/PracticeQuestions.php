<?php

namespace App\Data;

class PracticeQuestions
{
    public static function getQuestionsByGrade($grade)
    {
        $allQuestions = self::getAllQuestions();
        return $allQuestions[$grade] ?? [];
    }

    public static function getAllQuestions()
    {
        return [
            3 => [
                [
                    'question' => 'What is 15 + 23?',
                    'choices' => ['38', '35', '40', '37'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 42 - 18?',
                    'choices' => ['24', '26', '22', '20'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 7 × 6?',
                    'choices' => ['42', '40', '44', '38'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 56 ÷ 8?',
                    'choices' => ['7', '8', '6', '9'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 25 + 17?',
                    'choices' => ['42', '40', '44', '38'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 63 - 29?',
                    'choices' => ['34', '36', '32', '30'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 8 × 5?',
                    'choices' => ['40', '38', '42', '36'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 48 ÷ 6?',
                    'choices' => ['8', '7', '9', '6'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 34 + 26?',
                    'choices' => ['60', '58', '62', '56'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 75 - 38?',
                    'choices' => ['37', '35', '39', '33'],
                    'correctAnswer' => 0
                ],
            ],
            4 => [
                [
                    'question' => 'What is 125 + 234?',
                    'choices' => ['359', '349', '369', '339'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 456 - 178?',
                    'choices' => ['278', '268', '288', '258'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 12 × 8?',
                    'choices' => ['96', '94', '98', '92'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 144 ÷ 12?',
                    'choices' => ['12', '11', '13', '10'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 267 + 189?',
                    'choices' => ['456', '446', '466', '436'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 523 - 247?',
                    'choices' => ['276', '266', '286', '256'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 15 × 7?',
                    'choices' => ['105', '103', '107', '101'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 168 ÷ 8?',
                    'choices' => ['21', '20', '22', '19'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 389 + 256?',
                    'choices' => ['645', '635', '655', '625'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 642 - 378?',
                    'choices' => ['264', '254', '274', '244'],
                    'correctAnswer' => 0
                ],
            ],
            5 => [
                [
                    'question' => 'What is 1,234 + 2,567?',
                    'choices' => ['3,801', '3,791', '3,811', '3,781'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 4,567 - 2,389?',
                    'choices' => ['2,178', '2,168', '2,188', '2,158'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 23 × 17?',
                    'choices' => ['391', '381', '401', '371'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 576 ÷ 24?',
                    'choices' => ['24', '23', '25', '22'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 3,456 + 2,789?',
                    'choices' => ['6,245', '6,235', '6,255', '6,225'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 7,234 - 3,567?',
                    'choices' => ['3,667', '3,657', '3,677', '3,647'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 34 × 25?',
                    'choices' => ['850', '840', '860', '830'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 1,152 ÷ 36?',
                    'choices' => ['32', '31', '33', '30'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 5,678 + 3,456?',
                    'choices' => ['9,134', '9,124', '9,144', '9,114'],
                    'correctAnswer' => 0
                ],
                [
                    'question' => 'What is 8,765 - 4,329?',
                    'choices' => ['4,436', '4,426', '4,446', '4,416'],
                    'correctAnswer' => 0
                ],
            ],
        ];
    }
}

