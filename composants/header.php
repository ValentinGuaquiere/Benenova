<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $pageTitle ?? 'Benenova'; ?></title>

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
        rel="stylesheet">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">

    <a class="navbar-brand" href="#">
        <img src="assets/logo.png" alt="" style="height: 50px;">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="nav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="menuDeroulant" role="button" data-bs-toggle="dropdown">
        Benenova
    </a>

    <ul class="dropdown-menu" aria-labelledby="menuDeroulant">
        <li><a class="dropdown-item" href="#">Qui sommes-nous ?</a></li>
        <li><a class="dropdown-item" href="#">Rejoindre l'équipe</a></li>

    </ul>
        <li class="nav-item">
          <a class="nav-link" href="#">Associations</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Entreprise</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Actualitées</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Nous contacter</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Trouvez une mission</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Se connecter <i class="bi bi-person"></i></a>
        </li>
      </ul>
    </div>

  </div>
</nav>

    </header>
</body>