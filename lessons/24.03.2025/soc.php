<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();

$questions = [
    1 => "Jakie jest twoje ulubione zwierzę?",
    2 => "Jaki jest twój ulubiony kolor?",
    3 => "Jaka jest twoja ulubiona potrawa?"
];

$totalQuestions = count($questions);
$currentQuestion = isset($_GET['q']) ? (int)$_GET['q'] : 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['answers'][$currentQuestion - 1] = $_POST['answer'];
    if ($currentQuestion <= $totalQuestions) {
        header("Location: ?q=" . ($currentQuestion + 1));
        exit;
    }
}

if ($currentQuestion > $totalQuestions) {
    echo "<h2>Dziękujemy za udział w quizie!</h2>";
    echo "<h3>Twoje odpowiedzi:</h3><ul>";
    foreach ($_SESSION['answers'] as $key => $answer) {
        echo "<li>Pytanie " . ($key + 1) . ": " . htmlspecialchars($answer) . "</li>";
    }
    echo "</ul>";
    session_destroy();
} else {
    echo "<h2>Pytanie $currentQuestion</h2>";
    echo "<p>{$questions[$currentQuestion]}</p>";
    echo "<form method='POST'>";
    echo "<input type='text' name='answer' required>";
    echo "<button type='submit'>Dalej</button>";
    echo "</form>";
}
?>
</body>
</html>