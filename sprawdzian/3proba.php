<?php
session_start();

$questions = [
    1 => "Jakie jest największe jezioro na świecie?",
    2 => "Kto napisał 'Pan Tadeusz'?",
    3 => "Stolica Francji to?"
];

$answers = [
    1 => "morze kaspijskie",
    2 => "adam mickiewicz",
    3 => "paryż"
];

$total_questions = count($questions);

if (!isset($_SESSION['score'])) {
    $_SESSION['score'] = 0;
}

$q = isset($_GET['q']) ? (int)$_GET['q'] : 1;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['answer']) && isset($answers[$q - 1])) {
        if (strtolower(trim($_POST['answer'])) === $answers[$q - 1]) {
            $_SESSION['score']++;
        }
    }
    if ($q > $total_questions) {
        header("Location: quiz.php?q=score");
        exit;
    }
    header("Location: quiz.php?q=$q");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
</head>
<body>
    <h1>Quiz</h1>
    <?php if ($q === 'score'): ?>
        <h2>Twój wynik: <?php echo $_SESSION['score']; ?> / <?php echo $total_questions; ?></h2>
        <?php session_destroy(); ?>
    <?php elseif (isset($questions[$q])): ?>
        <form method="POST" action="quiz.php?q=<?php echo $q + 1; ?>">
            <p><?php echo $questions[$q]; ?></p>
            <input type="text" name="answer" required>
            <button type="submit">Dalej</button>
        </form>
    <?php else: ?>
        <a href="quiz.php?q=1">Rozpocznij quiz</a>
    <?php endif; ?>
</body>
</html>
