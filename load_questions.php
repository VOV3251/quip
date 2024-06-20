<?php
$conn = new mysqli('localhost', 'root', '', 'quiz_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM questions";
$result = $conn->query($sql);

$questions = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $questions[] = $row;
    }
}

echo json_encode($questions);

$conn->close();
?>
