<?php
include 'config.php';


$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$messages_per_page = 10;
$offset = ($page - 1) * $messages_per_page;


$stmt = $pdo->query("SELECT COUNT(*) FROM messages");
$total_messages = $stmt->fetchColumn();


$stmt = $pdo->prepare("SELECT * FROM messages ORDER BY created_at DESC LIMIT :offset, :limit");
$stmt->bindParam(':offset', $offset, PDO::PARAM_INT);
$stmt->bindParam(':limit', $messages_per_page, PDO::PARAM_INT);
$stmt->execute();
$messages = $stmt->fetchAll(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Гостевая книга</title>
</head>
<body>
    <h1>Гостевая книга</h1>
    <a href="index.php">Главная</a>

    <?php foreach ($messages as $message): ?>
        <div>
            <p><strong><?php echo htmlspecialchars($message['name']); ?></strong> (<?php echo htmlspecialchars($message['email']); ?>)</p>
            <p><?php echo nl2br(htmlspecialchars($message['message'])); ?></p>
            <p><small>IP: <?php echo htmlspecialchars($message['ip_address']); ?> | Браузер: <?php echo htmlspecialchars($message['browser']); ?> | <?php echo $message['created_at']; ?></small></p>
            <hr>
        </div>
    <?php endforeach; ?>

    
    <div>
        <?php
        $total_pages = ceil($total_messages / $messages_per_page);
        for ($i = 1; $i <= $total_pages; $i++) {
            echo "<a href='view.php?page=$i'>$i</a> ";
        }
        ?>
    </div>
</body>
</html>
