<?php
session_start();

// Initialize score if not already set
if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}


// The rest of your quiz logic goes here
?>
