<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once("INCLUDES/head.php"); ?>
    <link rel="stylesheet" href="style-plantilla.css">
</head>
<body>

<?php include_once("INCLUDES/header.php"); ?>

<main>

    <!-- PARALLAX de bienvenida (componente compartido) -->
    <div class="parallax-container">
        <div class="parallax"><img src="img/hogwarts-hero.svg" alt="Castillo de Hogwarts"></div>
    </div>

    <div class="section white center">
        <div class="container">
            <h1 class="hp-title">Mundo M&aacute;gico de Harry Potter</h1>
            <div class="divider-gold" style="margin-left:auto;margin-right:auto;"></div>
            <p class="flow-text">
                Bienvenido al proyecto web del grupo. Explora las casas de Hogwarts,
                sus materias y los lugares m&aacute;s ic&oacute;nicos del castillo,
                todo construido con el framework front-end <strong>Materialize</strong>.
            </p>
            <a href="casas.php" class="btn-large hp-btn waves-effect waves-light" style="background-color:#4a1f6f;">
                <i class="material-icons left">auto_stories</i>Comenzar el recorrido
            </a>
        </div>
    </div>

    <!-- CARDS: los 3 ejes del proyecto -->
    <div class="section grey lighten-4">
        <div class="container">
            <h3 class="center section-title">Nuestros ejes tem&aacute;ticos</h3>
            <div class="row">

                <div class="col s12 m4">
                    <div class="card hp-card">
                        <div class="card-content">
                            <span class="card-title"><i class="material-icons left">people</i>Personajes</span>
                            <p>H&eacute;roes, profesores de Hogwarts y villanos del mundo m&aacute;gico.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Integrante 1</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card hp-card">
                        <div class="card-content">
                            <span class="card-title"><i class="material-icons left">castle</i>Hogwarts</span>
                            <p>Las 4 casas, las materias y clases, y los lugares del castillo.</p>
                        </div>
                        <div class="card-action">
                            <a href="casas.php">Integrante 2</a>
                        </div>
                    </div>
                </div>

                <div class="col s12 m4">
                    <div class="card hp-card">
                        <div class="card-content">
                            <span class="card-title"><i class="material-icons left">auto_fix_high</i>Magia</span>
                            <p>Hechizos, pociones y criaturas m&aacute;gicas del universo.</p>
                        </div>
                        <div class="card-action">
                            <a href="#">Integrante 3</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php include_once("INCLUDES/footer.php"); ?>

</body>
</html>
