<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡¡¡Acerca de!!!</title>
    <!-- Bootstrap ESTILOS --> 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        /* Estilo para el párrafo */
        p {
            color: black; /* Cambia el color del texto a negro */
        }

        /* Estilo para centrar el texto en el body */
        body {
            text-align: center;
        }

        /* Estilo para el header */
        header {
            background-color: green;
            color: white;
            padding: 20px 0;
        }

        /* Asegurarse de que las imágenes del carrusel tengan el tamaño correcto */
        .carousel-inner img {
            width: 100%;
            height: auto;
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

        /* Estilo para la barra de navegación */
        .navbar {
            background-color: black; /* Fondo negro para la barra de navegación */
        }

        .navbar-nav .nav-link {
            color: white; /* Color de texto blanco para los enlaces */
        }

        .navbar-nav .nav-link:hover {
            color: #007bff; /* Color azul para los enlaces al pasar el ratón */
        }

        .navbar-toggler-icon {
            background-color: white; /* Icono del menú hamburguesa en blanco */
        }

        /* Estilo para el formulario de búsqueda */
        .navbar .form-control {
            border: 1px solid #007bff; /* Borde azul para el campo de búsqueda */
        }

        .navbar .btn-outline-success {
            border-color: #007bff; /* Borde azul para el botón de búsqueda */
            color: #007bff; /* Texto azul para el botón de búsqueda */
        }

        .navbar .btn-outline-success:hover {
            background-color: #007bff; /* Fondo azul al pasar el ratón */
            color: white; /* Texto blanco para el botón de búsqueda al pasar el ratón */
        }

        /* Estilo adicional para alinear el formulario de búsqueda a la derecha */
        .navbar-collapse {
          display: flex;
          justify-content: flex-end;
        }

        .navbar-nav {
            margin-right: auto; /* Alinea los elementos de navegación a la izquierda */
        }

        .navbar-collapse form {
            margin-left: auto; /* Alinea el formulario a la derecha */
        }
    </style>
</head>
<body>
    <!-- INICIO DE BARRA DE NAVEGACIÓN -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">INICIO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <!-- Puedes agregar más enlaces aquí si lo deseas -->
                </ul>
                <form class="d-flex ms-auto">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- FIN DE BARRA DE NAVEGACIÓN -->

    <header>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Acerca de Diego Bissaro Consultoría by Azurah.SaU.<br>
                        Tu socio en Consultoría Tecnológica y Programación</h1>
                    <p>Diego Bissaro Consultoría es una empresa apasionada por la potenciación de talentos en el ámbito de la programación y la tecnología. Nos dedicamos a ofrecer soluciones innovadoras y personalizadas que impulsan el crecimiento y la eficiencia en empresas de todos los tamaños y sectores.</p>
                    <h1>Nuestra Misión</h1>
                    <p>Nuestra misión es convertirnos en el socio tecnológico preferido de nuestros clientes, proporcionando servicios de consultoría estratégica en IT y desarrollo de software a medida. Creemos en la importancia de la colaboración y la transparencia para superar las expectativas de nuestros clientes, ofreciendo soluciones que transformen sus operaciones y promuevan la innovación.</p>
                    <h1>Qué nos Distingue</h1>
                    <p>En Diego Bissaro Consultoría, nos distinguimos por nuestro enfoque centrado en el cliente y nuestro compromiso con la excelencia técnica. Valoramos cada proyecto como una oportunidad para demostrar nuestra capacidad de adaptación y nuestra experiencia en las últimas tecnologías del mercado.</p>
                    <h1>Compromiso con la Comunidad</h1>
                    <p>Además de nuestro compromiso con nuestros clientes, también nos dedicamos a fortalecer la comunidad de desarrollo de software. Organizamos eventos, talleres y programas de capacitación para fomentar el aprendizaje continuo y el intercambio de conocimientos entre profesionales del sector.</p>
                    <h1>Únete a Nosotros</h1>
                    <p>Si estás buscando un equipo apasionado que te ayude a potenciar tus talentos en programación y tecnología, Diego Bissaro Consultoría es tu mejor opción. ¡Contáctanos hoy mismo y descubre cómo podemos ayudarte a alcanzar tus objetivos tecnológicos!</p>
                </div>
            </div>
            <img src="assets/img/logo.png" alt="Azurah SAU" class="logo">
        </div>
    </header>

    <nav>
        <ul>
            <li><a href="https://www.google.com">Google</a></li>
            <li><a href="https://www.yahoo.com">Yahoo</a></li>
            <li><a href="https://talentosdigitales.ar/">Talentos Digitales</a></li>
        </ul>
    </nav>

    <!-- Párrafo existente -->
    <h1>Gracias!!!</h1>
    <p>Somos una empresa que se dedica a potenciar tus talentos.</p>

    <footer>
        <p>Todos los Derechos Reservados a Azurah.Sau</p>
    </footer>

    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
