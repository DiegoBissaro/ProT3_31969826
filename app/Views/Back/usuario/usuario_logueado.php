<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azurah.Sau_Tec</title>
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Estilo para el párrafo */
        p {
            color: dark; /* Cambia el color del texto a azul */
        }

        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
            background-color: #e0f7fa; /* Cambia el color de fondo a verde claro agua */
        }

        /* Estilo para el header */
        header {
            background-color: green;
            color: white;
            padding: 10px 0;
        }

        /* Estilo para los enlaces del nav */
        nav ul {
            list-style-type: none;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin: 0 10px;
        }

        nav ul li a {
            text-decoration: none;
            color: #007bff;
            /* Agregar sombreado al texto */
            text-shadow: 3px 3px 5px rgba(0, 0, 0, 0.7);
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Estilo para el footer */
        footer {
            padding: 20px;
            background-color: #f4f4f4;
            color: #333;
        }

        .destacado {
            font-weight: bold;
            color: #007bff;
        }

        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="miestilo.css">
</head>
<body>
<!-- INICIO DE BARRA DE NAVAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="quienes_somos">Quienes Somos</a> 
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="acercade">Acerca de</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Autoridades
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="cards_autoridades">Responsables</a></li>
                        <li><a class="dropdown-item" href="#">Cronograma de la empresa</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Eventos</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <a href="<?= base_url('logout'); ?>" class="btn btn-outline-light ms-2">Logout</a>
        </div>
    </div>
</nav>
<!-- FIN DE NAVAR -->
<div class="container mt-5">
    <div class="row justify-content-md-center">
        <div class="col-5">
            <?php if(session()->getFlashdata("msg")):?>
                <div class="alert alert-warning">
                    <?= session()->getFlashdata("msg")?>
                </div>
            <?php endif;?>
            <?php if(session()->perfil_id == 1): ?>
                <div>
                    <img class="center" height="75px" width="75px" src="<?php echo base_url('/assets/img/logo.png');?>">
                </div>
            <?php elseif(session()->perfil_id == 2): ?>
                <div>
                    <img class="center" height="75px" width="75px" src="<?php echo base_url('/assets/img/logo.png');?>">
                </div>
            <?php endif;?>
        </div>
    </div>
</div>

<!-- INICIO DE ENCABEZADO -->
<header>
    <div class="container" style="background-color: green;">
        <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>Diego Bissaro</h1>
                <h1>Tus Consultas</h1>
                <h1>Al siguiente Nivel</h1> 
            </div>
        </div>
    </div>
</header>
<!-- FIN DE ENCABEZADO -->

<div class="contenedor">
    <p class="destacado">"Los talentos digitales son las pinceladas modernas que crean el lienzo del futuro tecnológico."</p>
    <p>@Azurah.Sau</p>
</div>

<!-- Párrafo de agradecimiento -->
<h1>Gracias!!!</h1>
<p>
    Somos una empresa que se dedica a potenciar tus Talentos.
</p>

<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>

