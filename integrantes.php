<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrantes</title>
    <link rel="stylesheet" href="style.css">
    <?php include_once("INCLUDES/head.php"); ?>
</head>

<body>
    <?php include_once("INCLUDES/header.php"); ?>
    <main>
        <div class="section grey lighten-4">
            <div class="container">
                <h3 class="center section-title">Integrantes del grupo en cuestion:</h3>
                <div class="row">

                    <div class="col s12 m4">
                        <div class="card hp-card">
                            <div class="card-content">
                                <img class="card-img-top" src="img/gino.jpg" alt="Imagen Integrante 1">
                                <span class="card-title"><i class="material-icons left">person</i>Ortega Espinoza
                                    Gino</span>
                                <p>Héroes, profesores de Hogwarts y villanos del mundo mágico.</p>
                            </div>
                            <div class="card-action">
                                <a href="heroes.php">Personajes</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hp-card">
                            <div class="card-content">
                                <img class="card-img-top" src="img/sasha.jpg" alt="Imagen Integrante 2">
                                <span class="card-title"><i class="material-icons left">person</i>Nivin Quispe
                                    Sasha</span>
                                <p>Las 4 casas, las materias y clases, y los lugares del castillo.</p>
                            </div>
                            <div class="card-action">
                                <a href="casas.php">Hogwards</a>
                            </div>
                        </div>
                    </div>

                    <div class="col s12 m4">
                        <div class="card hp-card">
                            <div class="card-content">
                                <img class="card-img-top" src="img/miguel.jpg" alt="Imagen Integrante 3">
                                <span class="card-title"><i class="material-icons left">person</i>Jara Flores
                                    Miguel</span>
                                <p>Hechizos, pociones y criaturas mágicas del universo de Harry Potter.</p>
                            </div>
                            <div class="card-action">
                                <a href="hechizos.php">Magia</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>
</body>

<footer>
    <?php include_once("INCLUDES/footer.php"); ?>
</footer>

</html>