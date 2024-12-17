<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "connect.php";?>
    <title>Контакты</title>
</head>
<body>
    
<style>
.scrollspy-example {
    opacity: 0.9;
}

.map {
    margin-top: 2% ;
    margin-left: 25% ;
}
    </style>
<?php include_once "header.php";?>




<div class="card "
            style=
"background-image: url('images/1.jpg');
            background-size: cover; 
            background-position: center; 
            height: 100%;">


<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
<a href="https://vk.com/remontmotorov"> </a> 
<h4 id="scrollspyHeading1">Контакты для связи с нами</h4>
  <ul class="list-group">
  <li class="list-group-item">Номер телефона: 7-888-888-88-88 </li>
  <li class="list-group-item">Почта: remontmotorov@mail.ru</li>
  
 
</ul>
  <div  class="map" style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/sebastiya/1111059678/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Себастия</a><a href="https://yandex.ru/maps/10754/serpuhov/category/restaurant/184106394/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Ресторан в Серпухове</a><iframe src="https://yandex.ru/map-widget/v1/?ll=37.419698%2C54.918405&mode=poi&poi%5Bpoint%5D=37.414700%2C54.917786&poi%5Buri%5D=ymapsbm1%3A%2F%2Forg%3Foid%3D1111059678&z=15.16" width="560" height="400" frameborder="1" allowfullscreen="true" style="position:relative;"></iframe></div>
  </div>




            </div>

</body>
</html>