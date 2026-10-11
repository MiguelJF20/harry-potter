<?php $titulo = "Hechizos - Harry Potter"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once("INCLUDES/head.php"); ?>
</head>
<body>
    <?php include_once("INCLUDES/header.php"); ?>

    <main>

        <!-- ===== SLIDER (componente 3) ===== -->
        <div class="slider magia-slider">
            <ul class="slides">
                <li>
                    <img src="img/hechizo1.jpg" alt="Duelo de varitas">
                    <div class="caption left-align">
                        <h3>Hechizos</h3>
                        <h5 class="light grey-text text-lighten-3">La magia empieza con una varita y las palabras correctas.</h5>
                    </div>
                </li>
                <li>
                    <img src="img/hechizo2.jpg" alt="Patronus">
                    <div class="caption center-align">
                        <h3>Expecto Patronum</h3>
                        <h5 class="light grey-text text-lighten-3">Defensa contra los dementores.</h5>
                    </div>
                </li>
                <li>
                    <img src="img/hechizo3.jpg" alt="Clase de encantamientos">
                    <div class="caption right-align">
                        <h3>Clase de Encantamientos</h3>
                        <h5 class="light grey-text text-lighten-3">Hermione logra lanzar el hechizo Wingardium Leviosa sin errores.</h5>
                    </div>
                </li>
            </ul>
        </div>

        <div class="container">

            <!-- ===== CHIPS (componente 2) ===== -->
            <div class="section">
                <h4>Tipos de hechizos</h4>
                <p>Los hechizos se agrupan por lo que hacen. Estas son las categorías de la tabla:</p>

                <div class="chip chip-encantamiento">Encantamiento</div>
                <div class="chip chip-defensa">Defensa</div>
                <div class="chip chip-utilidad">Utilidad</div>
                <div class="chip chip-oscuro">Maldición imperdonable</div>
            </div>

            <!-- ===== TABLE (componente 1) ===== -->
            <div class="section">
                <h4>Hechizos más conocidos</h4>

                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>Hechizo</th>
                            <th>Efecto</th>
                            <th>Categoría</th>
                            <th>Lo usa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Expelliarmus</td>
                            <td>Desarma al oponente</td>
                            <td><div class="chip chip-defensa">Defensa</div></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr>
                            <td>Protego</td>
                            <td>Crea un escudo que bloquea hechizos</td>
                            <td><div class="chip chip-defensa">Defensa</div></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr>
                            <td>Expecto Patronum</td>
                            <td>Invoca un Patronus que ahuyenta a los dementores</td>
                            <td><div class="chip chip-defensa">Defensa</div></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr>
                            <td>Wingardium Leviosa</td>
                            <td>Hace flotar objetos</td>
                            <td><div class="chip chip-encantamiento">Encantamiento</div></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr>
                            <td>Accio</td>
                            <td>Atrae un objeto hacia quien lo lanza</td>
                            <td><div class="chip chip-encantamiento">Encantamiento</div></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr>
                            <td>Lumos</td>
                            <td>Enciende luz en la punta de la varita</td>
                            <td><div class="chip chip-utilidad">Utilidad</div></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr>
                            <td>Alohomora</td>
                            <td>Abre cerraduras</td>
                            <td><div class="chip chip-utilidad">Utilidad</div></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr>
                            <td>Avada Kedavra</td>
                            <td>Causa la muerte instantánea</td>
                            <td><div class="chip chip-oscuro">Maldición imperdonable</div></td>
                            <td>Voldemort</td>
                        </tr>
                        <tr>
                            <td>Crucio</td>
                            <td>Provoca un dolor insoportable</td>
                            <td><div class="chip chip-oscuro">Maldición imperdonable</div></td>
                            <td>Bellatrix Lestrange</td>
                        </tr>
                        <tr>
                            <td>Imperio</td>
                            <td>Controla la voluntad de la víctima</td>
                            <td><div class="chip chip-oscuro">Maldición imperdonable</div></td>
                            <td>Voldemort</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </main>

    <?php include_once("INCLUDES/footer.php"); ?>
    <script>
        M.Slider.init(document.querySelectorAll('.slider'), {
            height: 450,
            interval: 5000
        });
    </script>
</body>
</html>