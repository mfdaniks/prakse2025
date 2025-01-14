<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mājaslapa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#sākums">Sākums</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#produkti">Produkti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#galerija">Galerija</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#kontakti">Kontakti</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<section id="sākums" class="hero">
    <h1><mark>Laipni lūdzam mūsu internetveikalā!</mark></h1>
    <a href="#produkti" class="btn btn-primary">Uzzināt vairāk</a>
</section>

<section id="produkti" class="container">
    <h2>Produkti</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/id/175/300/200" class="card-img-top" alt="Produkts 1">
                <div class="card-body">
                    <h5 class="card-title">Retro sienas pulkstenis</h5>
                    <p class="card-text">Šis pulsktenis ir roku darbs, kas iederēsies jebkur.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/id/250/300/200" class="card-img-top" alt="Produkts 2">
                <div class="card-body">
                    <h5 class="card-title">Retro fotokamera</h5>
                    <p class="card-text">Fotokamera, kas ļaus Jums uzņemt kvalitatīvas, kā arī retro stila bildes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://picsum.photos/id/403/300/200" class="card-img-top" alt="Produkts 3">
                <div class="card-body">
                    <h5 class="card-title">Retro rakstāmmašīna</h5>
                    <p class="card-text">Sajūties vecajos laikos un raksti ar rakstāmmašīnu.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="galerija" class="container">
    <h2>Galerija</h2>
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="https://picsum.photos/800/400?random=1" class="d-block w-100" alt="Attēls 1">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/800/400?random=2" class="d-block w-100" alt="Attēls 2">
        </div>
        <div class="carousel-item">
          <img src="https://picsum.photos/800/400?random=3" class="d-block w-100" alt="Attēls 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Iepriekšējais</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Nākamais</span>
      </button>
    </div>
</section>

<section id="kontakti" class="container">
<div class="mb-3">
  <label for="vards" class="form-label">Vārds</label>
  <input type="text" class="form-control" id="vards" placeholder="Jūsu vārds">
</div><div class="mb-3">
  <label for="epasts" class="form-label">E-pasts</label>
  <input type="email" class="form-control" id="epasts" placeholder="Jūsu e-pasts">
</div>
<div class="mb-3">
  <label for="zinojums" class="form-label">Ziņojums</label>
  <textarea class="form-control" id="zinojums" placeholder="Jūsu ziņojums"rows="3"></textarea>
  <button type="submit" class="btn btn-primary">Sūtīt</button>
</div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
