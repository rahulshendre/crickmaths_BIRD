<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/app.min.css">
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="<?php echo e(config('app.baseURL')); ?>/assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">

<style>
* {
    font-family: "Baloo Da 2", sans-serif !important;
}

.practice-play-container {
    max-width: 900px;
    margin: 30px auto;
    padding: 30px;
    min-height: 70vh;
}

.progress-bar-container {
    background-color: #f0f0f0;
    height: 30px;
    border-radius: 15px;
    margin-bottom: 30px;
    overflow: hidden;
}

.progress-bar {
    background-color: #b70303;
    height: 100%;
    width: 0%;
    transition: width 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-weight: 600;
}

.question-container {
    background-color: #fff;
    border: 3px solid #b70303;
    border-radius: 20px;
    padding: 40px;
    margin-bottom: 30px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.question-number {
    font-size: 1.2rem;
    color: #b70303;
    margin-bottom: 20px;
    font-weight: 600;
}

.question-text {
    font-size: 2rem;
    color: #333;
    margin-bottom: 40px;
    font-weight: 600;
}

.choices-container {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
    margin-bottom: 30px;
}

@media (max-width: 768px) {
    .practice-play-container {
        padding: 15px;
        margin: 15px auto;
    }
    
    .question-container {
        padding: 20px;
    }
    
    .question-text {
        font-size: 1.5rem;
    }
    
    .choices-container {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .choice-item {
        font-size: 1.2rem;
        padding: 15px;
    }
    
    .controls {
        flex-direction: column;
        gap: 15px;
    }
    
    .btn {
        width: 100%;
    }
}

.choice-item {
    background-color: #f8f9fa;
    padding: 20px;
    border: 3px solid #ddd;
    border-radius: 15px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-size: 1.5rem;
    font-weight: 600;
    text-align: center;
}

.choice-item:hover {
    border-color: #b70303;
    background-color: #fff;
    transform: translateY(-3px);
}

.choice-item.selected {
    background-color: #b70303;
    color: white;
    border-color: #b70303;
}

.choice-item.correct {
    background-color: #28a745;
    color: white;
    border-color: #28a745;
}

.choice-item.incorrect {
    background-color: #dc3545;
    color: white;
    border-color: #dc3545;
}

.controls {
    display: flex;
    justify-content: space-between;
    margin-top: 30px;
}

.btn {
    padding: 15px 40px;
    font-size: 1.2rem;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    font-weight: 600;
    transition: all 0.3s ease;
}

.btn-primary {
    background-color: #b70303;
    color: white;
}

.btn-primary:hover:not(:disabled) {
    background-color: #950202;
    transform: scale(1.05);
}

.btn-primary:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.btn-secondary {
    background-color: #6c757d;
    color: white;
}

.btn-secondary:hover {
    background-color: #5a6268;
}

.feedback {
    margin-top: 20px;
    padding: 15px;
    border-radius: 10px;
    font-size: 1.2rem;
    font-weight: 600;
    display: none;
}

.feedback.correct {
    background-color: #d4edda;
    color: #155724;
    border: 2px solid #28a745;
}

.feedback.incorrect {
    background-color: #f8d7da;
    color: #721c24;
    border: 2px solid #dc3545;
}
</style>

<div class="practice-play-container">
    <div class="progress-bar-container">
        <div class="progress-bar" id="progressBar">Question 1 of 10</div>
    </div>

    <div class="question-container">
        <div class="question-number" id="questionNumber">Question 1</div>
        <div class="question-text" id="questionText">Loading question...</div>
        
        <div class="choices-container" id="choicesContainer">
            <!-- Choices will be populated here -->
        </div>

        <div class="feedback" id="feedback"></div>

        <div class="controls">
            <button class="btn btn-secondary" id="backBtn" onclick="window.location.href='<?php echo e(route('practice.index')); ?>'">Back</button>
            <button class="btn btn-primary" id="nextBtn" disabled>Next Question</button>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
let questions = [];
let currentIndex = 0;
let answers = [];
let selectedChoice = null;

$(document).ready(function() {
    // Load questions from sessionStorage
    const questionsData = sessionStorage.getItem('practiceQuestions');
    const grade = sessionStorage.getItem('practiceGrade');
    
    if (!questionsData) {
        alert('No practice session found. Redirecting...');
        window.location.href = '<?php echo e(route("practice.index")); ?>';
        return;
    }

    questions = JSON.parse(questionsData);
    currentIndex = parseInt(sessionStorage.getItem('currentQuestionIndex')) || 0;
    
    const savedAnswers = sessionStorage.getItem('practiceAnswers');
    if (savedAnswers) {
        answers = JSON.parse(savedAnswers);
        // If we have saved answers, make sure currentIndex doesn't exceed answered questions
        if (currentIndex >= answers.length) {
            // User is on a new question, keep currentIndex
        } else {
            // User refreshed mid-practice, they've already answered up to currentIndex
            // This is fine, they'll continue from where they left off
        }
    }

    loadQuestion();
    
    // Bind handler once after DOM is ready
    $('#nextBtn').off('click').on('click', handleNextClick);
});

let isAnswered = false;

function loadQuestion() {
    if (currentIndex >= questions.length) {
        finishPractice();
        return;
    }

    const question = questions[currentIndex];
    selectedChoice = null;
    isAnswered = false;

    // Update progress
    const progress = ((currentIndex + 1) / questions.length) * 100;
    $('#progressBar').css('width', progress + '%').text(`Question ${currentIndex + 1} of ${questions.length}`);
    $('#questionNumber').text(`Question ${currentIndex + 1}`);
    $('#questionText').text(question.question);

    // Clear previous choices
    $('#choicesContainer').empty();
    $('#feedback').hide().removeClass('correct incorrect');
    $('#nextBtn').prop('disabled', true).text('Submit Answer');

    // Populate choices
    question.choices.forEach((choice, index) => {
        const choiceElement = $('<div>')
            .addClass('choice-item')
            .text(choice)
            .data('index', index)
            .on('click', function() {
                if (isAnswered) {
                    return; // Already answered
                }
                $('.choice-item').removeClass('selected');
                $(this).addClass('selected');
                selectedChoice = index;
                $('#nextBtn').prop('disabled', false);
            });
        $('#choicesContainer').append(choiceElement);
    });
}

function handleNextClick() {
    if (!isAnswered) {
        // First click - submit answer
        if (selectedChoice === null) {
            alert('Please select an answer!');
            return;
        }

        const question = questions[currentIndex];
        const isCorrect = selectedChoice === question.correctAnswer;

        // Save answer
        answers.push({
            questionIndex: currentIndex,
            selectedAnswer: selectedChoice,
            correctAnswer: question.correctAnswer,
            isCorrect: isCorrect
        });

        sessionStorage.setItem('practiceAnswers', JSON.stringify(answers));

        // Show feedback
        $('.choice-item').off('click');
        $('.choice-item').each(function() {
            const index = $(this).data('index');
            if (index === question.correctAnswer) {
                $(this).addClass('correct');
            } else if (index === selectedChoice && !isCorrect) {
                $(this).addClass('incorrect');
            }
        });

        $('#feedback')
            .text(isCorrect ? '✓ Correct!' : '✗ Incorrect. The correct answer is: ' + question.choices[question.correctAnswer])
            .addClass(isCorrect ? 'correct' : 'incorrect')
            .show();

        isAnswered = true;

        // Update button text only, don't rebind handler
        if (currentIndex === questions.length - 1) {
            $('#nextBtn').text('Finish Practice');
        } else {
            $('#nextBtn').text('Next Question');
        }
    } else {
        // Second click - move to next question
        if (currentIndex === questions.length - 1) {
            finishPractice();
        } else {
            currentIndex++;
            sessionStorage.setItem('currentQuestionIndex', currentIndex);
            loadQuestion();
        }
    }
}

function finishPractice() {
    // Calculate results
    const correctCount = answers.filter(a => a.isCorrect).length;
    const totalQuestions = questions.length;
    const percentage = Math.round((correctCount / totalQuestions) * 100);

    // Store results in sessionStorage
    const results = {
        totalQuestions: totalQuestions,
        correctAnswers: correctCount,
        incorrectAnswers: totalQuestions - correctCount,
        percentage: percentage,
        grade: sessionStorage.getItem('practiceGrade')
    };

    sessionStorage.setItem('practiceResults', JSON.stringify(results));

    // Clear practice session data
    sessionStorage.removeItem('practiceQuestions');
    sessionStorage.removeItem('currentQuestionIndex');
    sessionStorage.removeItem('practiceAnswers');

    // Redirect to results
    window.location.href = '<?php echo e(route("practice.results")); ?>';
}
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/rahulshendre/Desktop/Coding/PlanetRead/Crickmath/cricmaths.billionreaders.org/resources/views/practice/play.blade.php ENDPATH**/ ?>