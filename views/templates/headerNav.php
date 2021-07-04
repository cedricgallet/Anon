<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <!-- Lien css -->
    <link href="/assets/css/style.css" rel="stylesheet">
    <!-- Lien bootstap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <title>Anon</title>
</head>

<body>

    <!-- Début header -->
    <header class="bg-body border-bottom border-danger">

        <!-- Début Navbar-->
        <nav class="navbar navbar-expand-lg navbar-light bg-gradient">
            <div class="container-fluid">
                <img class="img-fluid" src="assets/img/favicon.ico" alt="Logo du site représentant ......." height="35"
                    width="35">
                <a class="navbar-brand ps-2 me-1" href="#">Anon</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                aria-expanded="false">Failles</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="faille-applicative.php">faille-applicative</a></li>
                                <li><a class="dropdown-item" href="faille-humaine.php">faille-humaine</a></li>
                                <li><a class="dropdown-item" href="faille-reseaux.php">faille-reseaux</a></li>
                                <li><a class="dropdown-item" href="faille-web.php">faille-web</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="solutions.php">Solutions</a>
                        </li>

                        <!-- Début Inscription/Connexion -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Inscription/Connexion
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <form class="px-4 py-3">
                                    <div class="mb-3">
                                        <label for="exampleDropdownFormEmail1" class="form-label">Adresse
                                            email</label>
                                        <input type="email" class="form-control" id="exampleDropdownFormEmail1"
                                            placeholder="email@exemple.com">
                                    </div>
                                    <div class="mb-3">
                                        <label for="exampleDropdownFormPassword1" class="form-label">Mot de
                                            passe</label>
                                        <input type="password" class="form-control" id="exampleDropdownFormPassword1"
                                            placeholder="Mot-de-passe">
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="dropdownCheck">
                                            <label class="form-check-label" for="dropdownCheck">
                                                se rappeller de moi
                                            </label>
                                        </div>
                                    </div>
                                    <a class="btn btn-outline-secondary" href="login.php"
                                        role="button">s'identifier</a>
                                </form>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-decoration-underline" href="/views/user/form.php">Nouveau ici?
                                    Inscription</a>
                                <a class="dropdown-item text-decoration-underline" href="#">Mot de passe oublié?</a>
                            </ul>
                        </li>
                    </ul>
                    <!-- Fin Inscription/Connexion -->

                    <!-- Début champ Recherche -->
                    <form class="d-flex me-2">
                        <input class="form-control me-2" type="search" placeholder="Chercher par mot clé: xss"
                            aria-label="Search">
                        <button class="btn btn-outline-secondary" type="submit">Rechercher</button>
                    </form>
                    <!-- Fin champ recherche -->
                </div>
            </div>
        </nav>
        <!-- Fin Navbar -->
        <!-- Fin Header -->