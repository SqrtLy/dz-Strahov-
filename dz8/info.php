<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "connect.php";?>
    <title>Информация</title>
</head>
<body>
<?php include_once "header.php";?>    
<style>

.scrollspy-example {

    opacity: 0.9;
}


 .container {
    margin-top: 2%;
 }
    </style>

<div class="card "
            style=
"background-image: url('images/1.jpg');
            background-size: cover; 
            background-position: center; 
            height: 100%;">

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1">Наши Мастера</h4>
  </div>
  

<div class="container">
  <div class="row">
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="images/Мастер.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Плотников Иван Сергеевич</h5>
    <p class="card-text">Иван - опытный мастер с более чем 10-летним стажем работы. Специализируется на ремонте подвесных лодочных моторов всех марок. Обладает большим опытом и знанием в этой области.</p>
   
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="images/Мастер_два.png" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Гайкин Алексей Степанович</h5>
    <p class="card-text">Алексей - профессионал с высшим образованием по специальности механик-ремонтник. Имеет сертификаты и лицензии на проведение ремонта подвесных лодочных моторов. Гарантирует качественные услуги.</p>
   
  </div>
</div>
    </div>
    <div class="col">
    <div class="card" style="width: 18rem;">
  <img src="images/Мастер_три.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Курседов Кир Реквиемович</h5>
    <p class="card-text">Кир - мастер с хорошей репутацией среди владельцев лодок. Работает быстро и качественно, всегда стремится найти оптимальное решение для каждой проблемы с мотором.</p>

  </div>
</div>
    </div>
  </div>
</div>







           </div>


</body>
</html>