<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Tablica pytań i poprawnych odpowiedzi
$questions = [
    "Stolica Francji?" => "Paryż",
    "Największa planeta w Układzie Słonecznym?" => "Jowisz",
    "Pierwiastek chemiczny o symbolu O?" => "Tlen"
];

$score = 0;
$total = count($questions);
$submitted = isset($_POST['submit']);

if ($submitted) {
    foreach ($questions as $question => $correctAnswer) {
        $userAnswer = trim($_POST[md5($question)] ?? '');
        if (strcasecmp($userAnswer, $correctAnswer) == 0) {
            $score++;
        }
    }
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
    <h2>Quiz Wiedzy</h2>
    
    <?php if (!$submitted) : ?>
        <form method="post">
            <?php foreach ($questions as $question => $correctAnswer) : ?>
                <p><?php echo htmlspecialchars($question); ?></p>
                <input type="text" name="<?php echo md5($question); ?>" required>
            <?php endforeach; ?>
            <br>
            <input type="submit" name="submit" value="Sprawdź">
        </form>
    <?php else : ?>
        <h3>Twój wynik: <?php echo $score; ?> / <?php echo $total; ?></h3>
        <a href="">Spróbuj ponownie</a>
    <?php endif; ?>
</body>
</html>

</body>
</html>