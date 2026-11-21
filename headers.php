<?php
$url = 'https://httpbin.org';
$headers = @get_headers($url);
$output = $headers ? implode("\n", $headers) : "Не удалось получить заголовки.";
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Feedback form — Страница 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">МосПолитех</div>
    <h1>Feedback form</h1>
</header>

<main>
    <h2>Результат работы функции get_headers</h2>
    <textarea rows="15" readonly><?php echo htmlspecialchars($output); ?></textarea>

    <div class="nav-link">
        <a href="index.php" class="btn-secondary">← Вернуться на 1 страницу</a>
    </div>
</main>

<footer>
    Задание для самостоятельной работы
</footer>

</body>
</html>