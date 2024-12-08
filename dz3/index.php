<!DOCTYPE html>
<html>
<head>
    <title>Выбор дат</title>
</head>
<body>
    <form method="post">
        <label for="date1">Выберите первую дату:</label>
        <input type="date" id="date1" name="date1" required>
        <br><br>
        <label for="date2">Выберите вторую дату:</label>
        <input type="date" id="date2" name="date2" required>
        <br><br>
        <input type="submit" name="submit" value="Посчитать">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $date1 = $_POST['date1'];
        $date2 = $_POST['date2'];
        
        $diff = strtotime($date2) - strtotime($date1);
        $diff = $diff / (60 * 60 * 24); // Разница в днях
        
        if($diff < 10 || strtotime($date2) < strtotime($date1)){
            echo "<p>Ошибка! Пожалуйста выберите правильные  даты</p>";
        } else {
            $days = array();
            $current_date = strtotime($date1);
            while($current_date <= strtotime($date2)){
                $days[] = date("Y-m-d", $current_date);
                $current_date = strtotime("+1 day", $current_date);
            }
            echo "<pre>";
            print_r($days);
            echo "</pre>";
        }
    }
    ?>
</body>
</html>