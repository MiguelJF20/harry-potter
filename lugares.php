<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once("INCLUDES/head.php"); ?>
</head>
<body>

<?php include_once("INCLUDES/header.php"); ?>

<main>

    <div class="section hp-purple white-text" style="background-color:#2a1140;">
        <div class="container">
            <h2 class="hp-title white-text" style="margin-bottom:0;">Lugares del Castillo</h2>
        </div>
    </div>

    <!-- COMPONENTE 1: CAROUSEL de lugares -->
    <div class="section white">
        <div class="container">
            <h4 class="center section-title">Recorrido por los lugares</h4>
            <p class="center section-sub">Explora los rincones de Hogwarts (Carousel).</p>

            <div class="carousel hogwarts-carousel">
                <a class="carousel-item" href="#!">
                    <img src="img/comedor.svg" alt="El Gran Comedor">
                    <div class="hogwarts-carousel-caption">El Gran Comedor</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/biblioteca.svg" alt="La Biblioteca">
                    <div class="hogwarts-carousel-caption">La Biblioteca</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/menesteres.svg" alt="Sala de los Menesteres">
                    <div class="hogwarts-carousel-caption">Sala de los Menesteres</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/invernaderos.svg" alt="Los Invernaderos">
                    <div class="hogwarts-carousel-caption">Los Invernaderos</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/sauce.svg" alt="El Sauce Boxeador">
                    <div class="hogwarts-carousel-caption">El Sauce Boxeador</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/castillo.svg" alt="El Castillo de Hogwarts">
                    <div class="hogwarts-carousel-caption">El Castillo de Hogwarts</div>
                </a>
            </div>
        </div>
    </div>

    <!-- COMPONENTE 2: TABS por categoria de lugar -->
    <div class="section grey lighten-4">
        <div class="container">
            <h4 class="center section-title">Lugares por categoría</h4>
            <p class="center section-sub">Interiores, exteriores y lugares secretos (Tabs).</p>

            <div class="row">
                <div class="col s12">
                    <ul class="tabs hogwarts-tabs">
                        <li class="tab col s4"><a href="#interiores" class="active">Interiores</a></li>
                        <li class="tab col s4"><a href="#exteriores">Exteriores</a></li>
                        <li class="tab col s4"><a href="#secretos">Secretos</a></li>
                    </ul>
                </div>

                <div id="interiores" class="col s12">
                    <div class="row" style="margin-top:24px;">
                        <div class="col s12 m6">
                            <div class="card hp-card">
                                <div class="card-image">
                                    <img src="img/comedor.svg" alt="El Gran Comedor">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">El Gran Comedor</span>
                                    <p><strong>Ubicación:</strong> Planta baja del castillo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card hp-card">
                                <div class="card-image">
                                    <img src="img/biblioteca.svg" alt="La Biblioteca">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">La Biblioteca</span>
                                    <p><strong>Ubicación:</strong> Ala este, primer piso</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="exteriores" class="col s12">
                    <div class="row" style="margin-top:24px;">
                        <div class="col s12 m6">
                            <div class="card hp-card">
                                <div class="card-image">
                                    <img src="img/invernaderos.svg" alt="Los Invernaderos">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Los Invernaderos</span>
                                    <p><strong>Ubicación:</strong> Junto al castillo</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card hp-card">
                                <div class="card-image">
                                    <img src="img/sauce.svg" alt="El Sauce Boxeador">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">El Sauce Boxeador</span>
                                    <p><strong>Ubicación:</strong> Patio de Hogwarts</p>
                                </div>
                            </div>
                        </div>
                        <div class="col s12 m6">
                            <div class="card hp-card">
                                <div class="card-image">
                                    <img src="img/castillo.svg" alt="El Castillo de Hogwarts">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">El Castillo de Hogwarts</span>
                                    <p><strong>Ubicación:</strong> Escocia, Sierra Escocesa</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="secretos" class="col s12">
                    <div class="row" style="margin-top:24px;">
                        <div class="col s12 m6">
                            <div class="card hp-card">
                                <div class="card-image">
                                    <img src="img/menesteres.svg" alt="Sala de los Menesteres">
                                </div>
                                <div class="card-content">
                                    <span class="card-title">Sala de los Menesteres</span>
                                    <p><strong>Ubicación:</strong> Septimo piso</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPONENTE 3: COLLECTION con detalle de cada lugar -->
    <div class="section white">
        <div class="container">
            <h4 class="center section-title">Detalle de los lugares</h4>
            <p class="center section-sub">Descripción completa de cada sitio (Collection).</p>

            <ul class="collection with-header">
                <li class="collection-header"><h5>Lugares más emblemáticos</h5></li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">place</i>
                    <span class="title">El Gran Comedor</span>
                    <p>Salon principal donde se celebran los banquetes. El techo esta encantado para reflejar el cielo.</p>
                    <span class="secondary-content chip">Interiores</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">place</i>
                    <span class="title">La Biblioteca</span>
                    <p>Miles de libros y la Seccion Restringida. Hogar de la bibliotecaria Madam Pince.</p>
                    <span class="secondary-content chip">Interiores</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">place</i>
                    <span class="title">Sala de los Menesteres</span>
                    <p>Sala que aparece segun la necesidad del visitante. Fue clave en la Batalla de Hogwarts.</p>
                    <span class="secondary-content chip">Secretos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">place</i>
                    <span class="title">Los Invernaderos</span>
                    <p>Hogar de plantas magicas usadas en Herbologia, algunas muy peligrosas.</p>
                    <span class="secondary-content chip">Exteriores</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">place</i>
                    <span class="title">El Sauce Boxeador</span>
                    <p>Arbol violento que uno de sus brazos esconde un pasadizo secreto hasta la Casa de los Gritos.</p>
                    <span class="secondary-content chip">Exteriores</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">place</i>
                    <span class="title">El Castillo de Hogwarts</span>
                    <p>El colegio de magia y hechiceria; sus escaleras y pasillos cambian de lugar.</p>
                    <span class="secondary-content chip">Exteriores</span>
                </li>
            </ul>
        </div>
    </div>

</main>

<?php include_once("INCLUDES/footer.php"); ?>

</body>
</html>
