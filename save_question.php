<?php
// Start session
session_start();

// Database connection
$conn = new mysqli('localhost', 'root', '', 'quiz_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$question_text = $conn->real_escape_string($_POST['question_text']);
$correct_answer = $conn->real_escape_string($_POST['correct_answer']);
$wrong_answer1 = $conn->real_escape_string($_POST['wrong_answer1']);
$wrong_answer2 = $conn->real_escape_string($_POST['wrong_answer2']);
$wrong_answer3 = $conn->real_escape_string($_POST['wrong_answer3']);

// Insert the new question into the database
$sql = "INSERT INTO questions (question_text, correct_answer, wrong_answer1, wrong_answer2, wrong_answer3) 
        VALUES ('$question_text', '$correct_answer', '$wrong_answer1', '$wrong_answer2', '$wrong_answer3')";

if ($conn->query($sql) === TRUE) {
    echo "New question added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
