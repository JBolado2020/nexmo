<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon">
    <title>Tercer escalón -:- Productos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'menu.php';?>

    <div class="container-fluid">

    <div class="header">
        <div class="row">
            <div class="col-md-12 col-xl-7">
                <div class="container animated bounceInDown container-text">
                    <p><b>Nuestros productos están diseñados para satisfacer las necesidades de información de instituciones públicas y privadas, corporativos, bibliotecas, universidades, preparatorias, escuelas, institutos de educación, ONG’s y público en general.</b></p>
                    <br><div class="separador"></div><br>
                    <p>Desde una plataforma de libros electrónicos en español, pasando por portales interactivos de ecología, literatura y museología, hasta la promoción en digital de las tradiciones populares de México, Tercer Escalón desarrolla una amplia gama de productos de calidad y fácil acceso en las distintas áreas del saber.</p>
                </div>
            </div>
            <div class="col-md-12 col-xl-5 animated bounceInRight">
                <img src="img/2productos.png" alt="" class="img-fluid fluid-3">
            </div>
        </div>
    </div>

        <div class="productos">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-xl-6 animated fadeIn delay-1s slow">
                        <div class="producto-1">
                            <h2>BiblioTechnia</h2>
                            <p>Bibliotechnia es una plataforma de libros electrónicos en español diseñada especialmente para bibliotecas digitales de diferentes sectores. Incluye alrededor de 20,000 títulos de más de 50 casas editoriales y es proveedor de alrededor de 840 bibliotecas en América Latina, con 1.2 millones de usuarios.</p>
                        </div>
                        <button onclick="email()">SOLICITA EL LISTADO</button>
                    </div>
                    <div class="col-lg-12 col-xl-6 animated fadeIn delay-1s slow">
                        <div class="producto-2">
                            <h2>Timone</h2>
                            <p>Timone es una plataforma de servicios bibliotecarios que proporciona una solución integral a los requerimientos de instituciones académicas, gubernamentales y de investigación, a través de una eficaz herramienta de control y gestión de todos los procesos operativos y administrativos en el área de bibliotecas.</p>
                        </div>
                        <button onclick="email()">SOLICITA DEMO</button>
                    </div>
                </div>
                <div class="row two">
                    <div class="col-lg-12 col-xl-6 animated fadeIn delay-3s slow">
                        <div class="producto-3">
                            <h2>Léctimus</h2>
                            <p>Léctimus es una innovadora plataforma digital que permite desarrollar y mejorar la competencia lectora en los niveles educativos medio y superior y público en general. Contiene más de 500 ejercicios y lecturas que ayudan a incrementar las habilidades en Lectura Comprensiva, Pensamiento Crítico, Discusión y Debate.</p>
                        </div>
                        <button onclick="email()">SOLICITA UN TALLER </button>
                    </div>
                    <div class="col-lg-12 col-xl-6 animated fadeIn delay-3s slow">
                        <div class="producto-4">
                            <h2>Museo Itinerante</h2>
                            <p>Los museos itinerantes son experiencias pedagógicas que integran técnicas de exposición museográfica que ayudan a sensibilizar a audiencias ciudadanas, académicas y empresariales sobre temas sensibles y de difícil comprensión.</p>
                            
                    </div>
                    <button onclick="email()">SOLICITA UNA PLÁTICA</button>
                        </div>
                </div>
            </div>
        </div>

        
    </div>

    <?php include 'footer.php';?>

</body>
</html>