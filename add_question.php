<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Question</title>
</head>
<body>
    <h1>Add a New Question</h1>
    <form action="save_question.php" method="POST">
        <label for="question_text">Question:</label><br>
        <input type="text" id="question_text" name="question_text" required><br><br>
        
        <label for="correct_answer">Correct Answer:</label><br>
        <input type="text" id="correct_answer" name="correct_answer" required><br><br>
        
        <label for="wrong_answer1">Wrong Answer 1:</label><br>
        <input type="text" id="wrong_answer1" name="wrong_answer1" required><br><br>
        
        <label for="wrong_answer2">Wrong Answer 2:</label><br>
        <input type="text" id="wrong_answer2" name="wrong_answer2" required><br><br>
        
        <label for="wrong_answer3">Wrong Answer 3:</label><br>
        <input type="text" id="wrong_answer3" name="wrong_answer3" required><br><br>
        
        <input type="submit" value="Add Question">
    </form>
</body>
</html>
