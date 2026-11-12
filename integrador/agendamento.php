<!doctype html>
<html lang="PT-BR" data-bs-theme="light">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Agendamento</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
    rel="stylesheet" />
  <link rel="stylesheet" href="./estilos/agendamento.css" />
</head>

<body>

  <?php 
    include './navbar.php'
  ?>

  <div class="mainDiv">
    <p style="color: rgb(87 105 94)">Inicio / Agendar quadra</p>

    <h1 style="color: rgb(23 60 45)" class="fw-bold">
      Sua próxima partida começa aqui.
    </h1>


    <p style="color: rgb(18 84 61)" class="fw-semibold">01 Escolha a quadra</p>
    <p style="color: rgb(18 84 61)" class="fw-semibold">02 Data e horario</p>
    <p style="color: rgb(18 84 61)" class="fw-semibold">03 Seus dados</p>

    <h2 style="color: rgb(23 60 45)" class="fw-semibold">
      1. Escolha a quadra
    </h2>
    <div class="cardSelectQuadra">
      <section class="card" style="width: 45vw;">
        <img src="quadra.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Quadra poliesportiva do centro</h4>
          <h6 class="mb-0">Rua das Palmerias, 120, Centro</h6>
          <h5 class="mb-0">Futsal, Vôlei, Basquete</h5>
          <a href="#" class="btn-solid quadraSelecionada">Quadra selecionada</a>
        </div>
      </section>

      <section style="width: 45vw;" class="card">
        <img src="quadra.png" class="card-img-top" alt="...">
        <div class="card-body">
          <h4 class="card-title">Quadra da vila nova</h4>
          <h6 class="mb-0">Rua Ipê Amarelo, 85, Vila Nova</h6>
          <h5 class="mb-0">Futsal, Vôlei</h5>
          <a href="#" class="btn-solid selecionarQuadra">Selecionar esta quadra</a>
        </div>
      </section>
    </div>
    <div style="width: 100vw;" class="container cardsPrincipal">
      <div class="row cardsForms">
        <div style="width: 90vw" class="col card">
          <div class="card-body">
            <h4 class="card-title">Escolha quando jogar.</h4>
            <div id="carouselMultiple" class="carousel slide" data-bs-ends="stop"
              style="--bs-carousel-items: 3; --bs-carousel-items-gap: 1rem">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="mb-0">Novembro de 2026</h5>
                <div>
                  <button class="btn-icon btn-sm" type="button" data-bs-target="#carouselMultiple" data-bs-slide="prev"
                    style="--bs-carousel-control-icon-width: 1rem">
                    <span class="carousel-icon-prev" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                  </button>
                  <button class="btn-icon btn-sm" type="button" data-bs-target="#carouselMultiple" data-bs-slide="next"
                    style="--bs-carousel-control-icon-width: 1rem">
                    <span class="carousel-icon-next" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                  </button>
                </div>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item selectDia">
                  <a>SAB <br> 22</a>
                </div>
                <div class="carousel-item selectDiaSelecionado">
                  <a>DOM <br> 22</a>
                </div>
                <div class="carousel-item selectDia">
                  <a>SEG <br> 22</a>
                </div>
                <div class="carousel-item selectDia">
                  <a>TER <br> 22</a>
                </div>
                <div class="carousel-item selectDia">
                  <a>QUA <br> 22</a>
                </div>
                <div class="carousel-item selectDia">
                  <a>QUI <br> 22</a>
                </div>
                <div class="carousel-item selectDia">
                  <a>SEX <br> 22</a>
                </div>
              </div>
              <h5 class="mb-0">Domingo, 22 de Novembro</h5>
              <h6 class="mb-0">Cada reserva tem duração de 1 hora</h5>
                <h5 style="font-size: 18px; font-weight: bold;" class="mb-0">○ Livre <br> ● Selecionado</h5>
                <h5 style="font-weight: bold;" class="mb-0">× Ocupado <br> — Indisponível</h5>
            </div>
            <div class="cardsHorario">
              <button type="button" class="btn-subtle buttonHorario">16:00<br>○ Livre</button>
              <button type="button" class="btn-solid buttonHorarioSelected">17:00<br> ● Selecionado</button>
              <button type="button" class="btn-subtle buttonHorarioIndisponivel">18:00<br>— Indisponível</button>
              <button type="button" class="btn-subtle buttonHorarioOcupado">19:00<br>× Ocupado</button>
            </div>
          </div>
        </div>

        <div style="width: 90vw;" class="col card">
          <div class="card-body">
            <h4 class="card-title fw-bold">3. Finalize sua reserva</h4>

            <div class="form-field">
              <div>
                <label for="sizesInputDefault" class="form-label">Nome completo</label>
                <input class="form-control" type="text" id="sizesInputDefault" placeholder=""
                  aria-label="Default input example">
              </div>
              <div>
                <label for="sizesInputDefault" class="form-label">Telefone com DDD</label>
                <input class="form-control" type="text" id="sizesInputDefault" placeholder=""
                  aria-label="Default input example">
              </div>
              <label for="fieldSelect" class="form-label">Modalidade</label>
              <select class="form-control" id="fieldSelect">
                <option selected>Escolha uma modalidade</option>
                <option value="1">Futsal</option>
                <option value="2">Volei</option>
                <option value="3">Basquete</option>
              </select>
              <div class="container row">
                <div class="col">
                  <label class="">Data</label>
                  <input class="form-control" type="text" placeholder="22/11/2026" aria-label="Disabled input example"
                    disabled>
                </div>
                <div class="col">
                  <label class="">Hora</label>
                  <input class="form-control" type="text" placeholder="17:00 às 18:00"
                    aria-label="Disabled input example" disabled>
                </div>
              </div>
            </div>
            <div class="form-field">
              <input type="checkbox" id="fieldCheck" class="check" />
              <label for="fieldCheck">Li e aceito as regras de uso da quadra</label>
            </div>
            <a href="#" class="btn-solid confirmarReserva">Confirmar reserva</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <?php 
    include './rodape.php'
  ?>

  <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL"
    crossorigin="anonymous"></script>
</body>

</html>