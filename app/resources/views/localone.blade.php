<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cricket Quiz</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom CSS styles */
        body {
            background-color: #f8f9fa;
        }
        .container {
            padding: 20px;
        }
        .question {
            font-size: 18px;
            font-weight: bold;
        }
        .options {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Cricket Quiz</h3>
                        <p class="question">Q1: Samit Patel gives 15 runs in 4 overs. How many runs did he give per over?</p>
                        <div class="options">
                            <button class="btn btn-warning">60</button>
                            <button class="btn btn-warning">19</button>
                            <button class="btn btn-warning">3</button>
                            <button class="btn btn-warning">16</button>
                        </div>
                        <button class="btn btn-danger mt-3 float-end">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Include Bootstrap JS (optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>