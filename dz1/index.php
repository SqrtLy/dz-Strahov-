<?php
// Функция для расчета количества дней и минут между датами
function calculateDifference($date1, $date2) {
    // Преобразование строк в объекты DateTime
    $date1 = new DateTime($date1);
    $date2 = new DateTime($date2);
    
    // Вычисление разницы
    $interval = $date1->diff($date2);
    
    // Получение разницы в днях
    $days = $interval->days;
    
    // Получение разницы в минутах
    $minutes = ($days * 24 * 60) + ($interval->h * 60) + $interval->i;
    
    return [$days, $minutes];
}

// Переменные для хранения выбранных дат и результата
$date1 = $date2 = '';
$daysDifference = $minutesDifference = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Получаем даты из формы
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];

    // Вычисляем разницу, если обе даты заполнены
    if (!empty($date1) && !empty($date2)) {
        list($daysDifference, $minutesDifference) = calculateDifference($date1, $date2);
    }
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Калькулятор разницы между датами</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .form-container {
            margin-bottom: 20px;
        }
        .result {
            margin-top: 20px;
        }
    </style>
</head>
<body>

    <h1>Калькулятор разницы между датами</h1>

    <form method="POST" action="">
        <div class="form-container">
            <label for="date1">Первая дата:</label>
            <input type="date" name="date1" value="<?php echo htmlspecialchars($date1); ?>" required>
        </div>

        <div class="form-container">
            <label for="date2">Вторая дата:</label>
            <input type="date" name="date2" value="<?php echo htmlspecialchars($date2); ?>" required>
        </div>

        <div class="form-container">
            <button type="submit">Рассчитать разницу</button>
        </div>
    </form>

    <?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($date1) && !empty($date2)): ?>
        <div class="result">
            <p>Разница между датами:</p>
            <p>Дней: <?php echo $daysDifference; ?></p>
            <p>Минут: <?php echo $minutesDifference; ?></p>
        </div>
    <?php endif; ?>

</body>
</html>