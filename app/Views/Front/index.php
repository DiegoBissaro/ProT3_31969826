<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documento Principal</title>
    <!--Bootstrap-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" >
    <style>
        /* Estilo para el párrafo */
        p {
            color: blue; /* Cambia el color del texto a azul */
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
    </style>
    <!-- Enlace al archivo CSS externo -->
    <link rel="stylesheet" href="miestilo.css">
  </head>
<body>
  <!--- INICIO DE BARRA DE NAVAR --->
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
        <li class="nav-item">
          <a class="nav-link" href="registro">Registro</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Autoridades
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="cards_autoridades">Responsables</a></li>
                  <li><a class="dropdown-item" href="#"> Cronograma de la empresa</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Eventos
                  </a></li>
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
          </div>
        </div>
      </nav>
<!--- FIN DE NAVAR --->

<!--- INICIO DE ENCABEZADO --->
    <header>
    <div class="Container" style="background-color: green;"div>
            <div class="row justify-content-center">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Diego Bissaro</h1>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Tus Consultas</h1>
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <h1>Al siguiente Nivel</h1> 
    <!--- FIN DE ENCABEZADO --->

        <!--- INICIO DE CARRUSEL --->
        <div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets\img\imagen1.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8" "d-block w-50" alt="imagen1">
    </div>
    <div class="carousel-item">
      <img src="assets\img\imagen2.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8" "d-block w-50" alt="imagen2">
    </div>
    <div class="carousel-item">
      <img src="assets/img/imagen3.jpg" class="col-sm-8 col-md-8 col-lg-8 col-xl-8" "d-block w-50" alt="imagen3">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
<!-- FIN DE CARRUSEL -->
            </div>
          </div>
        <img src="assets\img\logo.png" alt="Azurah SAU" class="logo">
        <nav>
            <ul>
                <!-- Enlaces a páginas externas -->
            </ul>
        </nav>
    </header>
    <nav>
        <ul>
            <li><a href="https://www.google.com">Google</a></li>
            <li><a href="https://www.yahoo.com">Yahoo</a></li>
            <li><a href="https://talentosdigitales.ar/">Talentos Digitales</a></li>
        </ul>
    </nav>
    <div class="Container my-3">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h2>Formulario de productos</h2>
                <form>
                    <div class="mb-3">
                        <label for="Nombre del Lenguje" class="form-label">Lenguajes</label>
                        <input type="text" class="form-control" id="Nombre del Lenguje" placeholder="Lenguaje" autofocus>
                      </div>
                      <div class="mb-3">
                        <label for="Descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="Descripcion" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="Programadores" class="form-label">Numero de Programadores</label>
                        <input type="number" class="form-control" id="Programadores"/>
                      </div>
                      <div class="d-grid gap-2">
                        <button class="btn btn-success">Guardar</button>
                      <button class="btn btn-light">Limpiar</button>
                      </div>
                </form>
            </div>
            <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8">
                <h2>Estadistica de Programadores</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Nº</th>
                            <th>Lenguaje</th>
                            <th>cantidad de programadores</th>
                        </tr>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>JavaScrip</td>
                                <td>21</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Python</td>
                                <td>110</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>C#</td>
                                <td>45</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ruby</td>
                                <td>31</td>
                            </tr>

                        </tbody>
                    </thead>
                </table>
                
            </div>
        </div>
    <section>
        <p>Contacto @IG_Azurah</p>
    </section>
    <footer>
        <p>Creado por T_D</p>
    </footer>
     <!-- Contenido de tu página -->
     <div class="contenedor"></div>
     <p class="destacado">"Los talentos digitales son las pinceladas modernas que crean el lienzo del futuro tecnológico."</p>
     <p>@Azurah.Sau</p>
    </div>
    
<!-- Párrafo de agradecimiento -->
<h1>Gracias!!!</h1>
<p>
    Somos una empresa que se dedica a potenciar tus Talentos.
</p>
<script src="assets/js/bootstrap.bundle.min.js"> </script>
</body>
</html>