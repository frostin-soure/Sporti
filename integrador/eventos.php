<!doctype html>
<html lang="en" data-bs-theme="light">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link rel="stylesheet" href="./estilos/eventos.css">
    <link rel="stylesheet" href="./estilos/rodape.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">
  </head>
  <body>
    
    <?php 
      include './navbar.php'
    ?>
    
    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>
  <div class="cont">
    <h1 class="titulo">O próximo encontro é no esporte</h1>
   <p class="subt">
      Eventos, novidades e histórias de quem movimenta Santa Aurora.
    </p>
  <div class="card card-corrida" style="width: 100%;">

  <img src="assets/eventoscor.png" class="card-img-start" alt="...">
  <div class="card-body">
    <h4 class="card-title">4ª Corrida de Santa Aurora</h4>
    <p class="card-text">Uma manhã para correr, caminhar e celebrar nossa cidade. Percursos de 3 km
     e 5 km.</p>
    <p class="card-text2">15 de novembro • 7h</p>
    <p class="card-text2">Praça da Matriz • Gratuito</p>
    <a href="#" class="btn-solid">Conhecer o evento  →</a>
  </div>
</div>

  <div class="ticard">
    <h1>Na agenda da cidade</h1>
  </div>
<div class="row row-cols-1 md:row-cols-3 g-4 cards">
<div class="col">
    <div class="card h-100">
      <img src="assets/enventosvol.png" class="card-img-top2" alt="...">
      <div class="card-body">
        <h4 class="card-title">Festival de vôlei na praça</h4>
        <p class="card-text">Quadra da Vila Nova • Gratuito</p>
      </div>
      <div class="card-footer">
        <small class="fg-2">22 NOV • 8h</small>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
      <img src="assets/enventosfut.png" class="card-img-top2" alt="...">
      <div class="card-body">
        <h4 class="card-title">Domingo de esporte em família<h4>
        <p class="card-text">Centro Esportivo Municipal • Gratuito</p>
      </div>
      <div class="card-footer">
        <small class="fg-2">29 NOV • 9h</small>
      </div>
    </div>
  </div>
</div>
<div class="ticard">
    <h1>Últimas notícias</h1>
</div>

<div class="cardsNoticias">
<div class="card w-75 mb-3 ">
  <div class="card-body">
    <h6 class="subnot">06 NOV 2026 • INFRAESTRUTURA</h6>
    <h1 class="card-not">Quadra do Centro ganha nova iluminação</h1>
    <p class="card-text">O espaço está mais seguro e pronto para os jogos noturnos.</p>
    <a href="#" class="btn-theme-color">Ler notícia  →</a>
  </div>
</div>

<div class="card w-75 mb-3">
  <div class="card-body">
    <h6 class="subnot">03 NOV 2026 • PROJETOS</h6>
    <h1 class="card-not">Escolinhas esportivas abrem novas turmas</h1>
    <p class="card-text">Inscrições presenciais de 9 a 20 de novembro, na Secretaria.</p>
    <a href="#" class="btn-theme-color">Ler notícia  →</a>
  </div>
</div>
</div>
</div>

<?php
  include './rodape.php'
?>

  </body>
</html>