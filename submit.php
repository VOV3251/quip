<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'quiz_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Initialize score if not already set
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

$user_answer = $_POST['answer'];
$sql = "SELECT * FROM questions WHERE correct_answer='$user_answer'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Correct answer
    $_SESSION['score'] += 10;
} else {
    // Wrong answer
    $_SESSION['score'] -= 5;
}

// Update score in the database (if applicable)
$username = $_SESSION['username'];
$score = $_SESSION['score'];

$sql = "UPDATE scores SET score=$score WHERE username='$username'";
$conn->query($sql);

$conn->close();

header('Location: index.php');
?>
