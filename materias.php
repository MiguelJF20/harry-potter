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
            <h2 class="hp-title white-text" style="margin-bottom:10;">Materias y Clases</h2>
        </div>
    </div>

    <!-- COMPONENTE 1: CAROUSEL de materias -->
    <div class="section white">
        <div class="container">
            <h4 class="center section-title">Asignaturas</h4>
            <p class="center section-sub">Recorre las clases más representativas (Carousel).</p>

            <div class="carousel hogwarts-carousel">
                <a class="carousel-item" href="#!">
                    <img src="img/pociones.jpg" alt="Pociones">
                    <div class="hogwarts-carousel-caption">Pociones</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/encantamientos.jpg" alt="Encantamientos">
                    <div class="hogwarts-carousel-caption">Encantamientos</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/defensa.jpg" alt="Defensa Contra las Artes Oscuras">
                    <div class="hogwarts-carousel-caption">Defensa Contra las Artes Oscuras</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/herbologia.jpg" alt="Herbologia">
                    <div class="hogwarts-carousel-caption">Herbologia</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/transformaciones.jpg" alt="Transformaciones">
                    <div class="hogwarts-carousel-caption">Transformaciones</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/astronomia.jpg" alt="Astronomia">
                    <div class="hogwarts-carousel-caption">Astronomia</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/adivinacion.jpg" alt="Adivinacion">
                    <div class="hogwarts-carousel-caption">Adivinacion</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/cuidado.jpg" alt="Cuidado de Criaturas Magicas">
                    <div class="hogwarts-carousel-caption">Cuidado de Criaturas Magicas</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/historia.jpg" alt="Historia de la Magia">
                    <div class="hogwarts-carousel-caption">Historia de la Magia</div>
                </a>
                <a class="carousel-item" href="#!">
                    <img src="img/vuelo.jpg" alt="Vuelo en Escoba">
                    <div class="hogwarts-carousel-caption">Vuelo en Escoba</div>
                </a>
            </div>
        </div>
    </div>

    <!-- COMPONENTE 2: TABS por tipo de materia -->
    <div class="section grey lighten-4">
        <div class="container">
            <h4 class="center section-title">Clases por tipo</h4>
            <p class="center section-sub">Cambia entre obligatorias, optativas y otras.</p>

            <div class="row">
                <div class="col s12">
                    <ul class="tabs hogwarts-tabs">
                        <li class="tab col s4"><a href="#obligatorias" class="active">Obligatorias</a></li>
                        <li class="tab col s4"><a href="#optativas">Optativas</a></li>
                        <li class="tab col s4"><a href="#otros">Otras clases</a></li>
                    </ul>
                </div>

                <div id="obligatorias" class="col s12">
                    <ul class="collection" style="margin-top:24px;">
                        <li class="collection-item avatar">
                            <img src="img/pociones.jpg" alt="Pociones" class="circle">
                            <span class="title">Pociones</span>
                            <p><strong>Profesor:</strong> Severus Snape / Horace Slughorn<br>
                               <strong>Curso:</strong> Todos los cursos</p>
                        </li>
                        <li class="collection-item avatar">
                            <img src="img/encantamientos.jpg" alt="Encantamientos" class="circle">
                            <span class="title">Encantamientos</span>
                            <p><strong>Profesor:</strong> Filius Flitwick<br>
                               <strong>Curso:</strong> Todos los cursos</p>
                        </li>
                        <li class="collection-item avatar">
                            <img src="img/defensa.jpg" alt="Defensa Contra las Artes Oscuras" class="circle">
                            <span class="title">Defensa Contra las Artes Oscuras</span>
                            <p><strong>Profesor:</strong> Remus Lupin y otros<br>
                               <strong>Curso:</strong> Todos los cursos</p>
                        </li>
                        <li class="collection-item avatar">
                            <img src="img/herbologia.jpg" alt="Herbologia" class="circle">
                            <span class="title">Herbologia</span>
                            <p><strong>Profesor:</strong> Pomona Sprout<br>
                               <strong>Curso:</strong> Todos los cursos</p>
                        </li>
                        <li class="collection-item avatar">
                            <img src="img/transformaciones.jpg" alt="Transformaciones" class="circle">
                            <span class="title">Transformaciones</span>
                            <p><strong>Profesor:</strong> Minerva McGonagall<br>
                               <strong>Curso:</strong> Todos los cursos</p>
                        </li>
                        <li class="collection-item avatar">
                            <img src="img/astronomia.jpg" alt="Astronomia" class="circle">
                            <span class="title">Astronomia</span>
                            <p><strong>Profesor:</strong> Aurora Sinistra<br>
                               <strong>Curso:</strong> Todos los cursos</p>
                        </li>
                    </ul>
                </div>

                <div id="optativas" class="col s12">
                    <ul class="collection" style="margin-top:24px;">
                        <li class="collection-item avatar">
                            <img src="img/pociones.jpg" alt="Adivinacion" class="circle">
                            <span class="title">Adivinacion</span>
                            <p><strong>Profesor:</strong> Sybill Trelawney<br>
                               <strong>Curso:</strong> Tercer año en adelante</p>
                        </li>
                        <li class="collection-item avatar">
                            <img src="img/herbologia.jpg" alt="Cuidado de Criaturas Magicas" class="circle">
                            <span class="title">Cuidado de Criaturas Magicas</span>
                            <p><strong>Profesor:</strong> Rubeus Hagrid<br>
                               <strong>Curso:</strong> Tercer año en adelante</p>
                        </li>
                    </ul>
                </div>

                <div id="otros" class="col s12">
                    <ul class="collection" style="margin-top:24px;">
                        <li class="collection-item avatar">
                            <img src="img/astronomia.jpg" alt="Historia de la Magia" class="circle">
                            <span class="title">Historia de la Magia</span>
                            <p><strong>Profesor:</strong> Cuthbert Binns<br>
                               <strong>Curso:</strong> Todos los cursos</p>
                        </li>
                        <li class="collection-item avatar">
                            <img src="img/vuelo.jpg" alt="Vuelo en Escoba" class="circle">
                            <span class="title">Vuelo en Escoba</span>
                            <p><strong>Profesor:</strong> Rolanda Hooch<br>
                               <strong>Curso:</strong> Primer año</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- COMPONENTE 3: COLLECTION con el catalogo completo -->
    <div class="section white">
        <div class="container">
            <h4 class="center section-title">Catálogo de materias</h4>
            <p class="center section-sub">Listado completo con descripción (Collection).</p>

            <ul class="collection">
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Pociones</span>
                    <p>Preparacion de mezclas magicas. Requiere precision, paciencia y buenas notas.</p>
                    <span class="secondary-content chip">Todos los cursos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Encantamientos</span>
                    <p>Aprender hechizos como Wingardium Leviosa y conjunto de conjuros basicos.</p>
                    <span class="secondary-content chip">Todos los cursos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Defensa Contra las Artes Oscuras</span>
                    <p>Tecnicas para defenderse de criaturas y magia oscura, incluido el Patronus.</p>
                    <span class="secondary-content chip">Todos los cursos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Herbologia</span>
                    <p>Estudio de plantas magicas en los invernaderos de Hogwarts.</p>
                    <span class="secondary-content chip">Todos los cursos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Transformaciones</span>
                    <p>Cambiar la forma de objetos y seres vivos. Una de las materias mas dificiles.</p>
                    <span class="secondary-content chip">Todos los cursos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Astronomia</span>
                    <p>Observacion de estrellas y planetas desde la Torre de Astronomia.</p>
                    <span class="secondary-content chip">Todos los cursos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Adivinacion</span>
                    <p>Interpretar el futuro con bolas de cristal, hojas de te y sueños.</p>
                    <span class="secondary-content chip">Tercer año en adelante</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Cuidado de Criaturas Magicas</span>
                    <p>Conocer y cuidar criaturas fantasticas como hipogrifos y thestrals.</p>
                    <span class="secondary-content chip">Tercer año en adelante</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Historia de la Magia</span>
                    <p>Relato de los hechos mas importantes del mundo magico.</p>
                    <span class="secondary-content chip">Todos los cursos</span>
                </li>
                <li class="collection-item avatar">
                    <i class="material-icons circle hogwarts-circle">school</i>
                    <span class="title">Vuelo en Escoba</span>
                    <p>Bases del vuelo en escoba, puerta de entrada al Quidditch.</p>
                    <span class="secondary-content chip">Primer año</span>
                </li>
            </ul>
        </div>
    </div>

</main>

<?php include_once("INCLUDES/footer.php"); ?>

</body>
</html>