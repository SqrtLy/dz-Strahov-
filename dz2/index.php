
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Гостевая книга</title>
</head>
<body>
<h1>Гостевая книга</h1>

<form  method="get">
    <label for="name">Имя:</label><br>
    <input type="text" id="name" name="name" required><br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
    <label for="message">Сообщение:</label><br>
    <textarea id="message" name="message" required></textarea><br><br>
    <input type="submit" value="Добавить сообщение">
</form>



<?php
$name = $_GET['name'];
$email = $_GET['email'];
$message = $_GET['message'];
$datetime = date('Y-m-d H:i:s');
$message = str_replace(PHP_EOL, '<br>', $message);

$data = "$name|$email|$datetime|$message" . PHP_EOL;

file_put_contents('data.txt', $data, FILE_APPEND);



?>


<hr>

<?php
$messages = file('data.txt');
$messages = array_reverse($messages);

foreach ($messages as $message) {
    $message_data = explode('|', $message);
    $name = $message_data[0];
    $email = $message_data[1];
    $datetime = $message_data[2];
    $text = str_replace(PHP_EOL, '<br>', $message_data[3]);

    echo "<strong>Имя: </strong>$name <br> <strong>Маил: </strong>$email<br>  <strong>Время: </strong>$datetime<br>  <strong>Сообщение: </strong>$text<hr>";
}

exit;

?>

</body>
</html>