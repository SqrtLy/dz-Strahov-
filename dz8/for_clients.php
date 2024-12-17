<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "connect.php";?>
    <title>Для клиентов</title>
</head>
<body>

<style>
.mb-3 {
    margin-top:2% ;
    margin-left:35% ;
   
}

.form-control{
    width: 50%;
}

.btn {
    margin-left:35% ;
}

.scrollspy-example {
    margin-top: 3%;
    opacity: 0.9;
}
</style>
<?php include_once "header.php";?>


<div class="card "
            style=
"background-image: url('images/1.jpg');
            background-size: cover; 
            background-position: center; 
            height: 100vh;">

<div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  <h4 id="scrollspyHeading1">Оформление заказа на ремонт</h4>
  <p>Оставьте заявку на рассмотрение вашей проблемы</p>

<form>
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Адрес электронной почты</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Пример текстового поля</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="mb-3">
  <label for="formFileSm" class="form-label">Прикрепите фото или видео поломки</label>
  <input class="form-control form-control-sm" id="formFileSm" type="file">
</div>
<button type="button" class="btn btn-primary">Primary</button>
</form>


           </div>

</body>
</html>