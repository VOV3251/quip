<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Game</title>
</head>
<body>
    <form action="submit.php" method="POST">
        <div id="question-container"></div>
        <input type="submit" value="Submit Answer">
    </form>

    <a href="display_score.php">Check Score</a>
    <h1>Welcome to the Quiz Game</h1>
    <a href="add_question.php">Add New Question</a>
    <!-- The rest of your quiz interface -->

    <script>
        fetch('load_questions.php')
            .then(response => response.json())
            .then(data => {
                let container = document.getElementById('question-container');
                data.forEach(question => {
                    container.innerHTML += `<p>${question.question_text}</p>`;
                    container.innerHTML += `<input type="radio" name="answer" value="${question.correct_answer}">${question.correct_answer}<br>`;
                    container.innerHTML += `<input type="radio" name="answer" value="${question.wrong_answer1}">${question.wrong_answer1}<br>`;
                    container.innerHTML += `<input type="radio" name="answer" value="${question.wrong_answer2}">${question.wrong_answer2}<br>`;
                    container.innerHTML += `<input type="radio" name="answer" value="${question.wrong_answer3}">${question.wrong_answer3}<br>`;
                });
            });
    </script>
</body>
</html>
