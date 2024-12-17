
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <?php include_once "connect.php";?>
     <link rel="stylesheet" href="index.css?v=<?php echo rand(); ?>">
    <title>Ремонт подвесных лодочных моторов</title>
    <style>


.d-block {
    margin-top: 5%;
    margin-left: 25%;
}
        </style>
</head>
<body>
<?php include_once "header.php";?>



        <div class="card "
            style=
"background-image: url('images/1.jpg');
            background-size: cover; 
            background-position: center; 
            height: 100vh;">
           
           <div data-bs-spy="scroll" data-bs-target="#navbar-example2" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true" class="scrollspy-example bg-body-tertiary p-3 rounded-2" tabindex="0">
  
           <h1 class="display-6">Мы заботися о вашем моторе: профессиональный ремонт подвесных лодочных моторов на высшем уровне!</h1>
</div>

       



<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/2.jpg" class="d-block w-50" alt="Ремонт подвесных лодочных моторов">
    </div>
    <div class="carousel-item">
      <img src="images/3.jpg" class="d-block w-50" alt="Ремонт подвесных лодочных моторов">
    </div>
    <div class="carousel-item">
      <img src="images/4.jpg" class="d-block w-50" alt="Ремонт подвесных лодочных моторов">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Предыдущий</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Следующий</span>
  </button>
</div>

        </div>
</div>
    
</body>

<?php include_once "footer.php";?>
</html>
