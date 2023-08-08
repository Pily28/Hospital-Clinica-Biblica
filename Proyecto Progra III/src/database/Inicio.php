<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <title>Hospital CIMA</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Hospital CIMA, Salud, Ambulacia privada"
    />
    <meta name="keywords" content="salud, citas, Citas en linea" />
    <!-- Favicon -->
    <link rel="shortcut icon" href="/src/img/medical-symbol.png" />
    <!-- Stylesheets -->
    <link rel="stylesheet" href="../css/normalize.css" />
    <link rel="stylesheet" href="../css/main.css" />
    <link rel="stylesheet" href="../css/Inicio.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
  </head>
  <body>
  
    <!-- Header -->
    <header class="fixed-fluid">
      <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
          <a class="navbar-brand" href="Inicio.php">CIMA</a>
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbar-content"
            aria-controls="navbar-content"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div
            class="collapse navbar-collapse justify-content-center"
            id="navbar-content"
          >
            <ul class="navbar-nav mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="Inicio.php"
                  >Inicio</a
                >
              </li>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle active"
                  href="#"
                  id="navbarDropdownMenuLink"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                  Trámites
                </a>
                <ul
                  class="dropdown-menu"
                  aria-labelledby="navbarDropdownMenuLink"
                >
                  <li>
                    <a class="dropdown-item" href="database/Registro.php">Registros</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="database/LoginColaboradores.php">Área Administrativa</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="database/LoginUsuarios.php">Login Usuarios</a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link active"
                  aria-current="page"
                  href="contacto.html"
                  >Contacto</a
                >
              </li>
            </ul>
            
          </div>
          <div class="user-info">
            <div class="profile-picture">
              <img src="<?php echo $_SESSION["imagen"]; ?>" alt="Imagen de perfil" id="profile-img">
              <ul class="options-list" id="options-list">
                <li><a class="dropdown-item" href="Actualizar_Contrasena.php">Actualizar Información de usuario</a></li>
                <li><a class="dropdown-item" href="Cambio_Contrasena.php">Cambiar Contraseña</a></li>
                <li><a class="dropdown-item" href="CerrarSesion.php">Cerrar Sesion</a>
              </li>
              </ul>
            </div>
            <p>Usuario: <?php echo $_SESSION["Identificacion"]; ?></p>
          </div>
        </div>
      </nav>
    </header>

    <!-- Content -->
    <div class="container-fluid">
      <main class="my-3">
        <section>
          <div
            id="carouselExampleCaptions"
            class="carousel slide"
            data-bs-ride="carousel"
          >
            <div class="carousel-indicators">
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCaptions"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img
                  src="../img/grupo_cima.jpg"
                  class="d-block w-100"
                  style="height: 600px"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Citas de inmediato con nuestro personal</h5>
                  <button type="button" id="ver-citas-btn" class="btn btn-warning">
                    Citas en línea
                </button>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="../img/cima_operaciones.jpg"
                  class="d-block w-100"
                  style="height: 600px"
                  alt="..."
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>La mejor atención médica privada</h5>
                  <button type="button" class="btn btn-warning">
                    Más información
                  </button>
                </div>
              </div>
              <div class="carousel-item">
                <img
                  src="../img/cima_instalaciones.jpg"
                  class="d-block w-100"
                  alt="..."
                  style="height: 600px"
                />
                <div class="carousel-caption d-none d-md-block">
                  <h5>Atención en minutos</h5>
                  <button type="button" id="ver-citas-btn" class="btn btn-warning">
                    Citas en línea
                  </button>
                </div>
              </div>
            </div>
            <button
              class="carousel-control-prev"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="prev"
            >
              <span
                class="carousel-control-prev-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Anterior</span>
            </button>
            <button
              class="carousel-control-next"
              type="button"
              data-bs-target="#carouselExampleCaptions"
              data-bs-slide="next"
            >
              <span
                class="carousel-control-next-icon"
                aria-hidden="true"
              ></span>
              <span class="visually-hidden">Siguiente</span>
            </button>
          </div>
        </section>

        <section>
          <div>
            <h2>Servicios</h2>
            <p>
              Aquí se presenta información sobre por qué el hospital debe ser
              elegido entre muchos otros.
            </p>
          </div>
        </section>

        <section>
          <div>
            <h2>Programa de Acción Social</h2>
            <p>
              Aquí se presenta información sobre por qué el hospital debe ser
              elegido entre muchos otros.
            </p>
          </div>
        </section>
      </main>
    </div>

    <!-- Footer -->
    <footer class="pt-4 pt-md-5 border-top">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-3">
            <img class="mb-2" src="../img/health-and-care.png" alt="" />
          </div>
          <div class="col-6 col-md-3">
            <h5>Localización</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">San Ramón</a></li>
              <li><a class="text-muted" href="#">San Carlos</a></li>
              <li><a class="text-muted" href="#">Rohrmoser</a></li>
              <li><a class="text-muted" href="#">Jacó</a></li>
            </ul>
          </div>
          <div class="col-6 col-md-3">
            <h5>Redes Sociales</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Instagram</a></li>
              <li><a class="text-muted" href="#">Facebook</a></li>
              <li><a class="text-muted" href="#">Twitter</a></li>
              <li><a class="text-muted" href="#">Youtube</a></li>
            </ul>
          </div>
          <div class="col-12 col-md-3">
            <h5>About</h5>
            <ul class="list-unstyled text-small">
              <li><a class="text-muted" href="#">Team</a></li>
              <li><a class="text-muted" href="#">Locations</a></li>
              <li><a class="text-muted" href="#">Privacy</a></li>
              <li><a class="text-muted" href="#">Terms</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/modernizr-3.11.2.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    ></script>
    <script src="https://kit.fontawesome.com/yourcode.js"></script>
    <script src="../js/Inicio.js"></script>
  </body>
</html>