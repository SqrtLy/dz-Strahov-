<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once "connect.php";?>
    <title>О нас</title>
</head>
<body>

<style>
.btn {
    margin-left: 10%;
    margin-top: 3%;
}

.scrollspy-example{
    margin-top: 3%; 
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
  <h4 id="scrollspyHeading1">Кратко о нас</h4>
  <p>Наша компания специализируется на ремонте и обслуживании подвесных лодочных моторов. Мы имеем богатый опыт в этой области и обеспечиваем высококачественный сервис для наших клиентов.</p>
</div>



<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Преимущество подвесных моторов</a>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">Наши преимущества</button>
  <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample3" aria-expanded="false" aria-controls="multiCollapseExample3">Почему вы должны обратиться к нам</button>
  
</p>
<div class="row">
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample1">
      <div class="card card-body">
      Подвесные лодочные моторы имеют ряд преимуществ перед обычными моторами. Во-первых, они идеально подходят для различных видов активного отдыха на воде, таких как рыбалка, прогулки и водный спорт. Во-вторых, подвесные моторы легки в управлении и обеспечивают хорошую маневренность лодки. И наконец, они более экономичны и надежны в использовании.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample2">
      <div class="card card-body">
      Наша компания лучше остальных благодаря высокой квалификации наших специалистов и использованию современного оборудования. Мы обеспечиваем быструю диагностику и профессиональный ремонт любых неисправностей в подвесных моторах. Кроме того, мы используем только оригинальные запчасти, что гарантирует долговечность и надежность работ.
      </div>
    </div>
  </div>
  <div class="col">
    <div class="collapse multi-collapse" id="multiCollapseExample3">
      <div class="card card-body">
      Клиенты должны обратиться в нашу компанию, чтобы получить высококачественный сервис по ремонту подвесных лодочных моторов. Мы гарантируем быстрое и качественное обслуживание, индивидуальный подход к каждому клиенту и конкурентные цены. Поручив нам заботу о вашем подвесном моторе, вы можете быть уверены в надежности и безопасности вашего отдыха на воде.
      </div>
    </div>
  </div>
</div>


           </div>

</body>
</html>