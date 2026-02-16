
   $(document).ready(function () {
  const queryString = window.location.search;
  const urlParams = new URLSearchParams(queryString);
  const category = urlParams.get('category');

  // Array to store user attempts
  var userAttempts = [];
  
  $.ajax({
    type: "POST",
    url: 'start',
    data: { category: category, _token: '{{ csrf_token() }}' },
    success: function (data) {
      // console.log(data);

      var questions = data;

      var questionCounter = 0; // Tracks question number
      var selections = []; // Array containing user choices
      var quiz = $('.content'); // Quiz div object

      // Display initial question
      displayNext();

      // Click handler for the 'next' button
      $('#next').on('click', function (e) {
        e.preventDefault();

        // Suspend click listener during fade animation
        if (quiz.is(':animated')) {
          return false;
        }
        choose();

        // If no user selection, progress is stopped
        if (isNaN(selections[questionCounter])) {
          $('#warning').text('Please make a selection!');
        } else {
          // Store the user's attempt for the current question
                var questionId = questions[questionCounter].question_id;
                var categoryId = questions[questionCounter].category;
                var ansId=questions[questionCounter].correctAnswer;
          userAttempts[questionCounter] = {
            categoryId:categoryId,
                 questionId: questionId,
            selectedValue: selections[questionCounter],
            correctAnswer:ansId,
            isCorrect: selections[questionCounter] === questions[questionCounter].correctAnswer
          };
  // console.log(userAttempts[questionCounter]);
          questionCounter++;
          $('#warning').text('');

         
        }
      });

      // Click handler for the 'prev' button
      $('#prev').on('click', function (e) {
        e.preventDefault();

        if (quiz.is(':animated')) {
          return false;
        }
        choose();
        questionCounter--;
        displayNext();
      });

      // Click handler for the 'Start Over' button
      $('#start').on('click', function (e) {
        e.preventDefault();

        if (quiz.is(':animated')) {
          return false;
        }
        questionCounter = 0;
        selections = [];
        userAttempts = []; // Clear user attempts when starting over
        displayNext();
        $('#start').hide();
      });

      // Creates and returns the div that contains the questions and 
      // the answer selections
      function createQuestionElement(index) {
        var qElement = $('<div>', {
          id: 'question'
        });
        var header = $('<h4 class="h4">Q' + (index + 1) + ':' + questions[index].question + '</h4>');

        qElement.append(header);

        var radioButtons = createRadios(index);
        qElement.append(radioButtons);

        var warningText = $('<p id="warning">');
        qElement.append(warningText);

        return qElement;
      }

      // Creates a list of the answer choices as radio inputs
      function createRadios(index) {
        var radioList = $('<ul>');
        var item;
        var input = '';
        for (var i = 0; i < questions[index].choices.length; i++) {
          item = $('<li>', { class: 'radio-item button-33 ml-2' });
          input = '<input type="radio" name="answer" class="butom33" id=' + i + ' value=' + i + ' />';
          input += '<label for=' + i + ' >' + questions[index].choices[i] + '</label>';
          item.append(input);
          radioList.append(item);
        }
        return radioList;
      }

      // Reads the user selection and pushes the value to an array
      function choose() {
     var selectedValue = +$('input[name="answer"]:checked').val();
        selections[questionCounter] = selectedValue;
        userAttempts[questionCounter] = selectedValue; // Store user attempt

        var correctAnswer = questions[questionCounter].correctAnswer;
        var isCorrect = selectedValue === correctAnswer;

        animateFeedback(isCorrect);
      }

      // Displays next requested element
      function displayNext() {
        quiz.fadeOut(function () {
          $('#question').remove();

          if (questionCounter < questions.length) {
            var nextQuestion = createQuestionElement(questionCounter);

            quiz.append(nextQuestion).fadeIn();

            if (!(isNaN(selections[questionCounter]))) {
              $('input[value=' + selections[questionCounter] + ']').prop('checked', true);
            }

            // Controls display of 'prev' button
            if (questionCounter === 1) {
              $('#prev').show();
            } else if (questionCounter === 0) {
              $('#prev').hide();
              $('#next').show();
            }
          } else {
            // If there are no more questions, display the score
            displayScore();
          }
        });
      }

      // Displays the final score
      function displayScore() {
        var scoreElem = $('<h2>', { id: 'question' });

        var numCorrect = 0;
        for (var i = 0; i < selections.length; i++) {
          if (selections[i] === questions[i].correctAnswer) {
            numCorrect++;
          }
        }

        // Calculate score and display relevant message
        var percentage = numCorrect / questions.length;
        var noQuestion = questions.length;
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const categoryId = urlParams.get('category')
       
        // Send user attempts to the server
        sendUserAttemptsToServer(userAttempts);
        $('#question').remove();
        $.ajax({
          type: "Post",
          url: '{{config("app.baseURL")}}/score',
          data: {categoryId: categoryId, correct: numCorrect, noQuestion: noQuestion, _token: '{{ csrf_token() }}' },
          success: function (result) {
            // console.log(result);
             initializeDataTable(result);
          } 
        });

        if (percentage >= 0.9) {
          scoreElem.append('Incredible! You got ' + numCorrect + ' out of ' +
            questions.length + ' questions right!');
        } else if (percentage >= 0.7) {
          scoreElem.append('Good job! You got ' + numCorrect + ' out of ' +
            questions.length + ' questions right!');
        } else if (percentage >= 0.5) {
          scoreElem.append('You got ' + numCorrect + ' out of ' +
            questions.length + ' questions right.');
        } else {
          scoreElem.append('You only got ' + numCorrect + ' out of ' +
            questions.length + ' right. Want to try again?');
        }

        quiz.append(scoreElem).fadeIn();
        $('#next').hide();
        $('#prev').hide();
        $('#start').show();
      }
      // Helper function to animate feedback
      function animateFeedback(isCorrect) {
        $('#question').empty()
        var feedbackElement = $('<div>', {
          id: 'question'
        });

        var feedbackImage = $('<img>', {
          src: isCorrect ? 'assets/images/six.webp' : 'assets/images/out.webp',
          alt: isCorrect ? 'Correct!' : 'Incorrect!'
        });

        feedbackElement.append(feedbackImage);
        quiz.append(feedbackElement);


// $('#questions').append('<table id="score-table" class="display" style="width:100%"></table>')
        // Animation
        feedbackElement.fadeIn('slow', function () {
          setTimeout(function () {
            feedbackElement.fadeOut('slow', function () {
              feedbackElement.remove();
             displayNext(); // Trigger next question after animation completes
            });
          }, 1500); // Adjust the timeout duration as needed
        });

      }

      function sendUserAttemptsToServer(userAttempts) {
  // You need to replace 'your-server-endpoint' with the actual endpoint URL on your server
  var endpointUrl = '{{config("app.baseURL")}}/saveUserAttempts';

  $.ajax({
    type: "POST",
    url: endpointUrl,
    data: { userAttempts: JSON.stringify(userAttempts), _token: '{{ csrf_token() }}' },
    success: function (response) {
      // console.log("User attempts sent successfully:", response);
      
    },
    error: function (error) {
      // console.error("Error sending user attempts:", error);
      // You can handle errors here
    }
  });
  // get request for report
  
}
// Function to initialize DataTable
function initializeDataTable(data) {
    // Assuming you have a container with the ID 'score-table-container' to append the DataTable
   console.log(data);
    var tableContainer = $('#question');
    
    // Create the DataTable
    var dataTable = $('<table>', { id: 'score-table', class: 'display', style: 'width:100%' });

    // Append the DataTable to the container
    tableContainer.append(dataTable);

    // Initialize DataTable
    dataTable.DataTable({
        data: data,
        columns: [
            { title: 'Test', data: 'Attempt' },
            { title: 'Correct Answers', data: 'Total Score' },
            { title: 'Total Questions', data: 'Question Count' },
        ],
    });
   
}
    }
  });
});
