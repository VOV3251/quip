<?php
session_start();
if (isset($_SESSION['score'])) {
    echo "Your current score is: " . $_SESSION['score'];
} else {
    echo "No score available. Please start the quiz.";
}
?>
