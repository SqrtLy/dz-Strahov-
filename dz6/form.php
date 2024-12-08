<?php
include 'config.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $ip = $_SERVER['REMOTE_ADDR']; 
    $browser = $_SERVER['HTTP_USER_AGENT']; 


    if (strlen($name) < 10 || strlen($message) < 10) {
        $error = "Имя должно быть не менее 10 символов, и сообщение не менее 10 символов.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Некорректный адрес электронной почты.";
    } else {
       
        $stmt = $pdo->prepare("INSERT INTO messages (name, email, message, ip_address, browser) 
                               VALUES (:name, :email, :message, :ip_address, :browser)");
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message,
            ':ip_address' => $ip,
            ':browser' => $browser
        ]);
        $success = "Ваше сообщение успешно отправлено!";
    }
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

    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <?php if (isset($success)) { echo "<p style='color:green;'>$success</p>"; } ?>

    <form action="" method="POST">
        <label for="name">Имя:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <label for="message">Сообщение:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        <input type="submit" value="Отправить">
    </form>

    
    <a href="index.php">Главная</a>

</body>
</html>
