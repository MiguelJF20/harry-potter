<?php $titulo = "Pociones - Harry Potter"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once("INCLUDES/head.php"); ?>
</head>
<body>
    <?php include_once("INCLUDES/header.php"); ?>

    <main>

        <!-- ===== SLIDER (componente 3) ===== -->
        <div class="container">
            <div class="slider magia-slider">
                <ul class="slides">
                    <li>
                        <img src="img/pocion1.jpg" alt="Ficha de la poción Amortentia">
                        <div class="caption left-align">
                            <h3>Amortentia</h3>
                            <h5 class="light grey-text text-lighten-3">El filtro de amor que se estudia en la clase del profesor Slughorn.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/pocion2.jpg" alt="Felix Felicis">
                        <div class="caption center-align">
                            <h3>Felix Felicis</h3>
                            <h5 class="light grey-text text-lighten-3">La suerte líquida que Slughorn ofrece como premio.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/pocion3.jpg" alt="Poción Multijugos">
                        <div class="caption right-align">
                            <h3>Poción Multijugos</h3>
                            <h5 class="light grey-text text-lighten-3">Permite tomar el aspecto de otra persona.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">

            <!-- ===== CHIPS (componente 2) ===== -->
            <div class="section">
                <h4>Tipos de pociones</h4>
                <p>Cada poción tiene un propósito distinto. Estas son las categorías de la tabla:</p>

                <div class="chip chip-transformacion">Transformación</div>
                <div class="chip chip-curacion">Curación</div>
                <div class="chip chip-suerte">Suerte</div>
                <div class="chip chip-mente">Mente y emociones</div>
            </div>

            <!-- ===== TABLE (componente 1) ===== -->
            <div class="section">
                <h4>Pociones más conocidas</h4>

                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>Poción</th>
                            <th>Efecto</th>
                            <th>Categoría</th>
                            <th>Quién la usa o prepara</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Poción Multijugos</td>
                            <td>Transforma a quien la bebe en otra persona por una hora</td>
                            <td><div class="chip chip-transformacion">Transformación</div></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr>
                            <td>Felix Felicis</td>
                            <td>Da buena suerte en todo lo que se intenta</td>
                            <td><div class="chip chip-suerte">Suerte</div></td>
                            <td>Horace Slughorn</td>
                        </tr>
                        <tr>
                            <td>Veritaserum</td>
                            <td>Obliga a decir la verdad a quien la toma</td>
                            <td><div class="chip chip-mente">Mente y emociones</div></td>
                            <td>Severus Snape</td>
                        </tr>
                        <tr>
                            <td>Amortentia</td>
                            <td>Provoca una fuerte obsesión amorosa</td>
                            <td><div class="chip chip-mente">Mente y emociones</div></td>
                            <td>Horace Slughorn</td>
                        </tr>
                        <tr>
                            <td>Filtro de los Muertos en Vida</td>
                            <td>Causa un sueño tan profundo que parece la muerte</td>
                            <td><div class="chip chip-mente">Mente y emociones</div></td>
                            <td>Horace Slughorn</td>
                        </tr>
                        <tr>
                            <td>Crecehuesos</td>
                            <td>Regenera los huesos rotos o desaparecidos</td>
                            <td><div class="chip chip-curacion">Curación</div></td>
                            <td>Madame Pomfrey</td>
                        </tr>
                        <tr>
                            <td>Poción de Mandrágora</td>
                            <td>Devuelve a la normalidad a quien fue petrificado</td>
                            <td><div class="chip chip-curacion">Curación</div></td>
                            <td>Madame Pomfrey</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

    <?php include_once("INCLUDES/footer.php"); ?>

    <script>
        M.Slider.init(document.querySelectorAll('.slider'), {
            height: 500,
            interval: 5000
        });
    </script>
</body>
</html>