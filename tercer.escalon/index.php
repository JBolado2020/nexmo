<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Tercer escalón -:- Inicio</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.1/css/all.css" integrity="sha384-v8BU367qNbs/aIZIxuivaU55N5GPF89WBerHoGA4QTcbUjYiLQtKdrfXnqAcXyTv" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'menu.php';?>


    <div class="container-fluid">

        <div class="carusel">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                </ol>
  
                <div class="carousel-inner animated zoomIn slow">
                    <div class="carousel-item active">
                        
                        <div class="carousel-caption slider1 ">
                            <p><span>Soluciones a medida</span> de tecnologíaSSS educativa para los centros de información de Iberoamérica.</p>
                            <button onclick="email()">PLATÍCANOS TU PROYECTO</button>
                        </div>
                        <img src="img/slide1.png" class="d-none d-sm-block w-100 slider2" alt="...">
                    </div>
                    <div class="carousel-item animated bounceInDown slow">
                        <img src="img/slide2.png" class="d-none d-md-block w-100 slider2" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>BiblioTechnia</h5>
                            <p class="text">Plataforma en línea de libros digitales en español</p>
                            <h3>CARACTERÍSTICAS POPULARES</h3>
                            <ul>
                                <li><img src="img/list.png" alt="">Publicaciones de calidad mundiales</li>
                                <li><img src="img/list.png" alt="">Más de 20,000 títulos en español</li>
                                <li><img src="img/list.png" alt="">Prestigiosas editoriales nacionales e internacionales</li>
                            </ul>
                            <button id="listado">SOLICITA EL LISTADO</button>
                        </div>
                    </div>
                    <div class="carousel-item animated fadeInLeft slow">
                        <img src="img/slide3.png" class="d-none d-md-block w-100 slider2" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>Timone</h5>
                            <p class="text">Plataforma de servicios bibliotecarios</p>
                            <h3>CARACTERÍSTICAS POPULARES</h3>
                            <ul>
                                <li><img src="img/list.png" alt="">Acceso remoto</li>
                                <li><img src="img/list.png" alt="">Generador de indicadores</li>
                                <li><img src="img/list.png" alt="">Control presupuestal</li>
                            </ul>
                            <button onclick="email()">SOLICITA DEMO</button>
                        </div>
                    </div>
                    <div class="carousel-item animated zoomInUp slow">
                        <img src="img/slide4.png" class="d-none d-md-block w-100 slider2" alt="...">
                        <div class="carousel-caption d-md-block">
                            <h5>Léctimus</h5>
                            <p class="text">Programa de lectura sociointeractiva</p>
                            <h3>CARACTERÍSTICAS POPULARES</h3>
                            <ul>
                                <li><img src="img/list.png" alt="">Disponibilidad 24/7</li>
                                <li><img src="img/list.png" alt="">Accesibilidad desde cualquier equipo</li>
                                <li><img src="img/list.png" alt="">Evaluaciones con retroalimentación en tiempo real</li>
                            </ul>
                            <button onclick="email()">SOLICITA UN TALLER</button>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/slide5.png" class="d-none d-md-block w-100 slider4" alt="...">
                        <div class="carousel-caption d-md-block slider3">
                            <h5>Third slide label</h5>
                            <p class="text">Experiencias pedagógicas que integran técnicas de exposición museográfica</p>
                            <h3>CARACTERÍSTICAS POPULARES</h3>
                            <ul>
                                <li><img src="img/list.png" alt="">Publicaciones de calidad mundial</li>
                                <li><img src="img/list.png" alt="">Más de 20,000 títulos en español</li>
                                <li><img src="img/list.png" alt="">Prestigiosas editoriales nacionales e internacionales</li>
                            </ul>
                            <button onclick="email()">SOLICITA UNA PLÁTICA</button>
                        </div>
                    </div>
                </div>

                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span aria-hidden="true"><i class="fas fa-chevron-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span aria-hidden="true"><i class="fas fa-chevron-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>

        <img src="img/clientes.png" alt="" class="img-fluid clientes">

        <div class="comment">
            <h3>Comentarios</h3>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <img src="img/perfil1.png" alt="" class="img-fluid">
                        <h5>Dr. Ennio Vivaldi Véjar <br> Rector Universidad de Chile</h5>
                        <div class="separador"></div>
                        <p>“Timone ha sido un valioso recurso para nuestra biblioteca”</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/perfil2.png" alt="" class="img-fluid">
                        <h5>Dr. Alejandro González Álvarez <br> Rector Universidad La Salle</h5>
                        <div class="separador"></div>
                        <p>“Léctimus ha sido un parteaguas en la construcción de aptitudes de nuestra comunidad estudiantil”</p>
                    </div>
                    <div class="col-md-4">
                        <img src="img/perfil3.png" alt="" class="img-fluid">
                        <h5>Dr. Mario Alberto Rodríguez <br> Rector del IPN</h5>
                        <div class="separador"></div>
                        <p>“BiblioTechnia se ha convertido en una plataforma fundamental en el día a día de nuestros estudiantes.”</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <?php include 'footer.php';?>

</body>
</html>