<!DOCTYPE html>
<html lang="pt-BR" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Integrador</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
</style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

  </head>
 <link rel="stylesheet" href="./estilos/index.css">

<body>

<!-- Barra de navegação -->

<?php 
  include './navbar.php'
?>
    
<!-- Início da Hero -->
<div class="hero">

<div class="esporte">
  <div class="tag">ESPORTE PARA TODOS AS PESSOAS</div>
  <h1 class="title">O esporte aproxima <br> pessoas e transforma <br> comunidades</h1>
  <p class="encontre">Encontre seu espaço, participe dos eventos e faça parte do esporte da sua cidade.</p>
  <a class="agendar">Agendar uma quadra →</a>
  <p class="small">Gratuito, depois ações no total</p>
</div>
<div class="hero-image"> <img src="fotohero.png" alt=""> </div>
</div>

<!-- Eventos -->
 <div class="eventos">
  <div class="eventosTitulo">
    <h1>Vem aí. Participe!</h1>
    <a href="">Ver todos os eventos →</a>
  </div>
  <div class="cards">
<section class="card" style="max-width: 320px">
  <img src="corrida.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="data">15 Nov</p>
    <h4 class="card-title">Corrida</h4>
    <p class="card-text">Praça da matriz • 7h</p>
    <a href="#" class="btn-solid button">Saiba mais →</a>
  </div>
</section>

<section class="card" style="max-width: 320px">
  <img src="volei.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="data">22 Nov</p>
    <h4 class="card-title">Volêi na praça</h4>
    <p class="card-text">Ginásio de esportes munícipal • 8h</p>
    <a href="#" class="btn-solid  button">Saiba mais →</a>
  </div>
</section>

<section class="card" style="max-width: 320px">
  <img src="fotohero2.png" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="data">29 Nov</p>
    <h4 class="card-title">Domingo em familia</h4>
    <p class="card-text">Centro esportivo • 9h</p>
    <a href="#" class="btn-solid  button">Saiba mais →</a>
  </div>
</section>
  </div>
</div>

<!-- Noticias -->
<div class="espaconoticias">
<h1>Por dentro do esporte munícipal</h1>

<div class="noticias">
  <div>
<p class="datas">06 NOV 2026</p>
<h4>Quadra do centro ganha nova iluminação</h4>
<p class="textonoticia">Mais segurança e mais tempo para jogar. Espaço já está aberto para reservas</p>
<p class="lernoticia">Ler notícia →</p>
 </div>

  <div>
<p class="datas">03 NOV 2026</p>
<h4>Escolinhas esportivas abrem novas turmas</h4>
<p class="textonoticia">Futsal e vôlei gratuitos para crianças e adolescentes de 7 a 15 anos.</p>
<p class="lernoticia">Ler notícia →</p>
   </div>

</div>

<?php 
  include './rodape.php'
?>

<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
</body>
</html>