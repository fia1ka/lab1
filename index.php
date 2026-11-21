<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Feedback form — Страница 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <div class="logo">
        <img src="logo.png" alt="МосПолитех">
    </div>
    <h1>Feedback form</h1>
</header>

<main>
    <h2>Форма обратной связи</h2>
    <form action="https://httpbin.org" method="POST">
        <label>Имя пользователя:
            <input type="text" name="username" required placeholder="Введите имя">
        </label>

        <label>E-mail пользователя:
            <input type="email" name="email" required placeholder="example@mail.ru">
        </label>

        <label>Тип обращения:
            <select name="type">
                <option value="complaint">Жалоба</option>
                <option value="suggestion">Предложение</option>
                <option value="gratitude">Благодарность</option>
            </select>
        </label>

        <label>Текст обращения:
            <textarea name="message" rows="5" required placeholder="Введите текст..."></textarea>
        </label>

        <div class="checkbox-group">
            <span>Вариант ответа:</span>
            <label><input type="checkbox" name="reply[]" value="sms"> СМС</label>
            <label><input type="checkbox" name="reply[]" value="email"> E-mail</label>
        </div>

        <button type="submit">Отправить</button>
    </form>

    <div class="nav-link">
        <a href="headers.php" class="btn-secondary">Перейти на 2 страницу →</a>
    </div>
</main>

<footer>
    Задание для самостоятельной работы
</footer>

</body>
</html>
