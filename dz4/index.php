<?php

$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "student_9";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
  die("Ошибка подключения: " . $conn->connect_error);
}




if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
  $value = $_POST["value"];
  $action_date = date('Y-m-d H:i:s');

  $sql = "INSERT INTO first_work (value, action_date) VALUES ('$value', '$action_date')";

  if ($conn->query($sql) === TRUE) {
    echo "Новая запись успешно создана";
  } else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
  }
}


$sql = "SELECT id, value, action_date FROM first_work";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table>";
  echo "<tr><th>ID</th><th>Value</th><th>Action Date</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["value"]."</td><td>".$row["action_date"]."</td></tr>";
    
  }
  echo "</table>";
} else {
  echo "Без результатов";
}


$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Student 9</title>
</head>
<body>
  <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="value">Введите Имя и Фамилию:</label>
    <input type="text" id="value" name="value">
    <button type="submit" name="submit">Отправить</button>
  </form>
</body>
</html>

<script>
var tds = document.querySelectorAll('td');

for (var i = 0; i < tds.length; i++) {
	tds[i].addEventListener('click', function func() {
		var input = document.createElement('input');
		input.value = this.innerHTML;
		this.innerHTML = '';
		this.appendChild(input);
		
		var td = this;
		input.addEventListener('blur', function() {
			td.innerHTML = this.value;
			td.addEventListener('click', func);
		});
		
		this.removeEventListener('click', func);
	});
}
</script>

