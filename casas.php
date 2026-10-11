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
            <h2 class="hp-title white-text" style="margin-bottom:0;">Las 4 Casas de Hogwarts</h2>
        </div>
    </div>

    <!-- COMPONENTE 1: CAROUSEL de emblemas -->
    <div class="section white">
        <div class="container">
            <h4 class="center section-title">Emblemas de cada casa</h4>
            <p class="center section-sub">Desliza o haz clic en un emblema para explorarlo (Carousel).</p>

            <div class="carousel hogwarts-carousel">
                <a class="carousel-item" href="#gryffindor">
                    <img src="img/gryffindor.jpg" alt="Emblema de Gryffindor">
                    <div class="hogwarts-carousel-caption">Gryffindor</div>
                </a>
                <a class="carousel-item" href="#slytherin">
                    <img src="img/slytherin.jpg" alt="Emblema de Slytherin">
                    <div class="hogwarts-carousel-caption">Slytherin</div>
                </a>
                <a class="carousel-item" href="#ravenclaw">
                    <img src="img/ravenclaw.jpg" alt="Emblema de Ravenclaw">
                    <div class="hogwarts-carousel-caption">Ravenclaw</div>
                </a>
                <a class="carousel-item" href="#hufflepuff">
                    <img src="img/hufflepuff.jpg" alt="Emblema de Hufflepuff">
                    <div class="hogwarts-carousel-caption">Hufflepuff</div>
                </a>
            </div>
        </div>
    </div>

    <!-- COMPONENTE 2: TABS con informacion de cada casa -->
    <div class="section grey lighten-4">
        <div class="container">
            <h4 class="center section-title">Información de cada casa</h4>
            <p class="center section-sub">Usa las pestañas para cambiar de casa.</p>

            <div class="row">
                <div class="col s12">
                    <ul class="tabs hogwarts-tabs">
                        <li class="tab col s3"><a href="#gryffindor">Gryffindor</a></li>
                        <li class="tab col s3"><a href="#slytherin">Slytherin</a></li>
                        <li class="tab col s3"><a href="#ravenclaw">Ravenclaw</a></li>
                        <li class="tab col s3"><a href="#hufflepuff">Hufflepuff</a></li>
                    </ul>
                </div>

                <div id="gryffindor" class="col s12">
                    <div class="row" style="margin-top:24px;">
                        <div class="col s12 m3 center">
                            <img src="img/gryffindor.jpg" alt="Gryffindor" style="width:120px;">
                        </div>
                        <div class="col s12 m9">
                            <h5>Gryffindor</h5>
                            <p><strong>Fundador:</strong> Godric Gryffindor</p>
                            <p><strong>Animal:</strong> León
                               &nbsp;|&nbsp; <strong>Colores:</strong> Rojo y dorado
                               &nbsp;|&nbsp; <strong>Elemento:</strong> Fuego</p>
                            <p><strong>Valores:</strong> Valor, audacia y caballerosidad</p>
                            <p><strong>Sala común:</strong> Torre de Gryffindor</p>
                            <span class="chip hogwarts-chip-gryffindor">Gryffindor</span>
                        </div>
                    </div>
                </div>

                <div id="slytherin" class="col s12">
                    <div class="row" style="margin-top:24px;">
                        <div class="col s12 m3 center">
                            <img src="img/slytherin.jpg" alt="Slytherin" style="width:120px;">
                        </div>
                        <div class="col s12 m9">
                            <h5>Slytherin</h5>
                            <p><strong>Fundador:</strong> Salazar Slytherin</p>
                            <p><strong>Animal:</strong> Serpiente
                               &nbsp;|&nbsp; <strong>Colores:</strong> Verde y plateado
                               &nbsp;|&nbsp; <strong>Elemento:</strong> Agua</p>
                            <p><strong>Valores:</strong> Ambición, astucia y determinación</p>
                            <p><strong>Sala común:</strong> Mazmorras de Slytherin</p>
                            <span class="chip hogwarts-chip-slytherin">Slytherin</span>
                        </div>
                    </div>
                </div>

                <div id="ravenclaw" class="col s12">
                    <div class="row" style="margin-top:24px;">
                        <div class="col s12 m3 center">
                            <img src="img/ravenclaw.jpg" alt="Ravenclaw" style="width:120px;">
                        </div>
                        <div class="col s12 m9">
                            <h5>Ravenclaw</h5>
                            <p><strong>Fundador:</strong> Rowena Ravenclaw</p>
                            <p><strong>Animal:</strong> Águila
                               &nbsp;|&nbsp; <strong>Colores:</strong> Azul y bronce
                               &nbsp;|&nbsp; <strong>Elemento:</strong> Aire</p>
                            <p><strong>Valores:</strong> Inteligencia, sabiduría e ingenio</p>
                            <p><strong>Sala común:</strong> Torre de Ravenclaw</p>
                            <span class="chip hogwarts-chip-ravenclaw">Ravenclaw</span>
                        </div>
                    </div>
                </div>

                <div id="hufflepuff" class="col s12">
                    <div class="row" style="margin-top:24px;">
                        <div class="col s12 m3 center">
                            <img src="img/hufflepuff.jpg" alt="Hufflepuff" style="width:120px;">
                        </div>
                        <div class="col s12 m9">
                            <h5>Hufflepuff</h5>
                            <p><strong>Fundador:</strong> Helga Hufflepuff</p>
                            <p><strong>Animal:</strong> Tej&oacute;n
                               &nbsp;|&nbsp; <strong>Colores:</strong> Amarillo y negro
                               &nbsp;|&nbsp; <strong>Elemento:</strong> Tierra</p>
                            <p><strong>Valores:</strong> Lealtad, paciencia y trabajo duro</p>
                            <p><strong>Sala común:</strong> Sótanos de Hufflepuff</p>
                            <span class="chip hogwarts-chip-hufflepuff">Hufflepuff</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPONENTE 3: COLLECTION con miembros destacados -->
    <div class="section white">
        <div class="container">
            <h4 class="center section-title">Miembros destacados</h4>
            <p class="center section-sub">Colección de personajes por casa.</p>

            <div class="row">
                <div class="col s12 m6">
                    <h5>Gryffindor</h5>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Harry Potter</span>
                            <p>El niño que vivió, protagonista de la saga.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Hermione Granger</span>
                            <p>La estudiante más brillante de su generación.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Ron Weasley</span>
                            <p>Mejor amigo de Harry y estratega del ajedrez mágico.</p>
                        </li>
                    </ul>
                </div>

                <div class="col s12 m6">
                    <h5>Slytherin</h5>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Severus Snape</span>
                            <p>Profesor de Pociones y figura clave de la historia.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Draco Malfoy</span>
                            <p>Rival de Harry y heredero de los Malfoy.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Tom Riddle</span>
                            <p>El joven que se convertiría en Lord Voldemort.</p>
                        </li>
                    </ul>
                </div>

                <div class="col s12 m6">
                    <h5>Ravenclaw</h5>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Luna Lovegood</span>
                            <p>Excéntrica y perceptiva, gran amiga de Harry.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Cho Chang</span>
                            <p>Buscadora del equipo de Quidditch.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Filius Flitwick</span>
                            <p>Director de la casa y profesor de Encantamientos.</p>
                        </li>
                    </ul>
                </div>

                <div class="col s12 m6">
                    <h5>Hufflepuff</h5>
                    <ul class="collection">
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Cedric Diggory</span>
                            <p>Campeón de Hogwarts en el Torneo de los Tres Magos.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Nymphadora Tonks</span>
                            <p>Aurora metamorfomaga de la Orden del Fénix.</p>
                        </li>
                        <li class="collection-item avatar">
                            <i class="material-icons circle hogwarts-circle">person</i>
                            <span class="title">Newt Scamander</span>
                            <p>Magizoólogo autor de Animales Fantásticos.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</main>

<?php include_once("INCLUDES/footer.php"); ?>

</body>
</html>
