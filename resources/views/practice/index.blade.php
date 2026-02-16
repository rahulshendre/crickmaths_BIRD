@extends('layouts.app')
@section('content')
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/app.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/fontawesome.min.css">
<link rel="stylesheet" href="{{config('app.baseURL')}}/assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+Da+2:wght@400..800&display=swap" rel="stylesheet">

<style>
* {
    font-family: "Baloo Da 2", sans-serif !important;
}

.practice-container {
    max-width: 800px;
    margin: 50px auto;
    padding: 30px;
    text-align: center;
    min-height: 60vh;
}

.practice-title {
    font-size: 2.5rem;
    color: #b70303;
    margin-bottom: 20px;
    font-weight: 600;
}

.practice-subtitle {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 40px;
}

.grade-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin: 40px 0;
}

.grade-item {
    background-color: #f8f9fa;
    padding: 30px 20px;
    border-radius: 15px;
    border: 3px solid #ddd;
    cursor: pointer;
    transition: all 0.3s ease;
    text-align: center;
}

.grade-item:hover {
    border-color: #b70303;
    background-color: #fff;
    transform: translateY(-5px);
    box-shadow: 0 5px 15px rgba(183, 3, 3, 0.2);
}

.grade-item.selected {
    background-color: #b70303;
    color: white;
    border-color: #b70303;
}

.grade-number {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 10px;
}

.grade-label {
    font-size: 1.1rem;
    font-weight: 500;
}

.start-btn {
    background-color: #b70303;
    color: white;
    padding: 15px 50px;
    font-size: 1.3rem;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    margin-top: 30px;
    transition: all 0.3s ease;
    font-weight: 600;
}

.start-btn:hover:not(:disabled) {
    background-color: #950202;
    transform: scale(1.05);
}

.start-btn:disabled {
    background-color: #ccc;
    cursor: not-allowed;
}

.back-btn {
    background-color: #6c757d;
    color: white;
    padding: 10px 30px;
    font-size: 1rem;
    border: none;
    border-radius: 20px;
    cursor: pointer;
    margin-top: 20px;
    text-decoration: none;
    display: inline-block;
    transition: all 0.3s ease;
}

.back-btn:hover {
    background-color: #5a6268;
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .practice-container {
        padding: 20px;
        margin: 20px auto;
    }
    
    .practice-title {
        font-size: 2rem;
    }
    
    .grade-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }
    
    .grade-item {
        padding: 20px;
    }
    
    .start-btn {
        width: 100%;
        padding: 15px 30px;
    }
}
</style>

<div class="practice-container">
    <h1 class="practice-title">Practice Mode</h1>
    <p class="practice-subtitle">Select your grade to start practicing math questions</p>
    
    <div class="grade-grid">
        <div class="grade-item" data-grade="3">
            <div class="grade-number">3</div>
            <div class="grade-label">Grade 3</div>
        </div>
        <div class="grade-item" data-grade="4">
            <div class="grade-number">4</div>
            <div class="grade-label">Grade 4</div>
        </div>
        <div class="grade-item" data-grade="5">
            <div class="grade-number">5</div>
            <div class="grade-label">Grade 5</div>
        </div>
    </div>

    <button class="start-btn" id="startBtn" disabled>Start Practice</button>
    <br>
    <a href="{{ url('/') }}" class="back-btn">Back to Home</a>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    let selectedGrade = null;

    $('.grade-item').on('click', function() {
        $('.grade-item').removeClass('selected');
        $(this).addClass('selected');
        selectedGrade = $(this).data('grade');
        $('#startBtn').prop('disabled', false);
    });

    $('#startBtn').on('click', function() {
        if (!selectedGrade) {
            alert('Please select a grade first!');
            return;
        }

        // Show loading
        $(this).prop('disabled', true).text('Loading...');

        // Start practice session
        $.ajax({
            url: '{{ route("practice.start") }}',
            method: 'POST',
            data: {
                grade: selectedGrade,
                _token: '{{ csrf_token() }}'
            },
            success: function(response) {
                // Store questions in sessionStorage
                sessionStorage.setItem('practiceQuestions', JSON.stringify(response.questions));
                sessionStorage.setItem('practiceGrade', response.grade);
                sessionStorage.setItem('currentQuestionIndex', 0);
                sessionStorage.setItem('practiceAnswers', JSON.stringify([]));

                // Redirect to play page
                window.location.href = '{{ route("practice.play") }}';
            },
            error: function(xhr) {
                alert('Error starting practice. Please try again.');
                $('#startBtn').prop('disabled', false).text('Start Practice');
            }
        });
    });
});
</script>
@endsection

