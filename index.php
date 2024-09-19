<?php
$filename = 'data.txt';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);


    if (empty($name) || empty($email) || empty($message)) {
        $error = "Все поля должны быть заполнены.";
    } else {

        $message = nl2br(htmlspecialchars($message));

        $timestamp = date('Y-m-d H:i:s');

        file_put_contents($filename, "$name;$email;$timestamp;$message\n", FILE_APPEND);
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
}

$messages = [];
if (file_exists($filename)) {
    $messages = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
    <h1>Гостевая книга</h1>

    <?php if (isset($error)): ?>
        <p style="color: red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <form method="post">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="message">Сообщение:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        <button type="submit">Отправить</button>
    </form>

    <h2>Сообщения:</h2>
    <div>
        <?php
        foreach (array_reverse($messages) as $msg) {
            list($name, $email, $timestamp, $message_text) = explode(';', $msg);
            echo "<strong>Имя:</strong> $name<br>";
            echo "<strong>Email:</strong> $email<br>";
            echo "<strong>Дата:</strong> $timestamp<br>";
            echo "<strong>Сообщение:</strong> $message_text<br><br>";
        }
        ?>
    </div>
</body>
</html>