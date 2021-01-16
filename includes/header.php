<!DOCTYPE html>
<html>
<head>
    <title>Comment System using PHP and Ajax</title>
    <!--    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>-->
    <!--    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>-->
    <!--    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->

    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/fontawesome.min.css"/>
    <link rel="stylesheet" href="css/brands.min.css"/>
    <link rel="stylesheet" href="css/main.css"/>
    <link rel="stylesheet" href="css/solid.min.css"/>
</head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <div class="logo">
                    <img class="logo-image" src="images/logo.png" alt="Logo Mediationsbüro Klein Volmer">
                    <p>Mediationsb&uuml;ro
                        <br>
                        <span class="text-uppercase">Klein/Volmer</span>
                    </p>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active myMargin">
                        <a class="nav-link" href="#">Mediation <span class="sr-only">( current )</span></a>
                    </li>
                    <li class="nav-item dropdown myMargin">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Schwerpunkte
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Betriebliche Mediation</a>
                            <a class="dropdown-item" href="#">Mediation</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">im Alltag</a>
                            <a class="dropdown-item" href="#">Familie/Lebensgemeinschaft</a>
                        </div>
                    </li>
                    <li class="nav-item myMargin">
                        <a class="nav-link" href="#">Über Uns</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="contact.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>

    </nav>
</header>
