<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "connect.php";?>
    <title>Новости</title>
</head>
<body>

<style>

.card {
    margin-top: 1%;
}
</style>
    
<?php include_once "header.php";?>


<div class="card "
            style=
"background-image: url('images/1.jpg');
            background-size: cover; 
            background-position: center; 
            height: 100%;">






<?php


$servername = "localhost";
$username = "root" ;
$password = "root";
$db_name = "news";

$conn =  new mysqli($servername, $username, $password, $db_name);

$sql = "SELECT * FROM `news`";
$result = $conn->query($sql);


?>

<div class="container">
  <div class="row align-items-start">
 
<?php
if($result -> num_rows) {
    while($row = $result -> fetch_assoc()){
        echo "<div class='col'>";
       echo "<div class='card' style='width: 18rem;'>";
       echo  "<img src='".$row['foto']."' class='card-img-top' alt='".$row['nazvanie']."'>";
       echo "<div class='card-body'>";
         echo "<h5 class='card-title'>".$row['zagolovok']."</h5>";
        echo  "<p class='card-text'>".$row['text']."</p>";
        echo  "<p class='card-text'>".$row['time']."</p>";
       echo "</div>";
     echo "</div>";
     echo "</div>";
    }
}

?>
</div>
</div>



            </div>

</body>
</html>