<?php $titulo = "Hechizos - Harry Potter"; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once("INCLUDES/head.php"); ?>
</head>
<body>
    <?php include_once("INCLUDES/header.php"); ?>

    <main>

        <!-- ===== SLIDER (SIN MODIFICACIONES) ===== -->
        <div class="container">
            <div class="slider magia-slider">
                <ul class="slides">
                    <li>
                        <img src="img/hechizo1.jpg" alt="Harry Potter con su varita">
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
        </div>

        <div class="container">

            <!-- ===== CHIPS ===== -->
            <div class="section">
                <h4>Tipos de hechizos</h4>
                <p>
                    Descubre las categorías de los hechizos según su función
                    y el efecto que producen en el mundo mágico.
                </p>

                <div class="chip chip-encantamiento">Encantamiento</div>
                <div class="chip chip-defensa">Defensa</div>
                <div class="chip chip-utilidad">Utilidad</div>
                <div class="chip chip-oscuro">Maldición imperdonable</div>
            </div>

            <!-- ===== TARJETAS DESTACADAS ===== -->
            <div class="section">
                <h4>Hechizos que marcaron la historia</h4>
                <p>Estos tres hechizos representan distintas formas de utilizar la magia.</p>

                <div class="row tarjetas-magicas">

                    <div class="col s4">
                        <div class="card tarjeta-hechizo tarjeta-defensa">
                            <div class="card-content">
                                <span class="card-title">Expecto Patronum</span>
                                <p class="etiqueta-tarjeta">DEFENSA</p>
                                <p>Invoca un Patronus capaz de ahuyentar a los dementores.</p>
                                <p class="personaje-tarjeta">Destacado: Harry Potter</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card tarjeta-hechizo tarjeta-encantamiento">
                            <div class="card-content">
                                <span class="card-title">Wingardium Leviosa</span>
                                <p class="etiqueta-tarjeta">ENCANTAMIENTO</p>
                                <p>Permite hacer levitar objetos mediante la magia.</p>
                                <p class="personaje-tarjeta">Destacada: Hermione Granger</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card tarjeta-hechizo tarjeta-oscuro">
                            <div class="card-content">
                                <span class="card-title">Avada Kedavra</span>
                                <p class="etiqueta-tarjeta">MAGIA OSCURA</p>
                                <p>Es una de las tres maldiciones imperdonables.</p>
                                <p class="personaje-tarjeta">Asociado: Voldemort</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===== TABLA ===== -->
            <div class="section">
                <h4>Hechizos más conocidos</h4>
                <p>Las etiquetas de colores permiten reconocer rápidamente la función de cada hechizo.</p>

                <table class="striped responsive-table tabla-magica">
                    <thead>
                        <tr>
                            <th scope="col">Hechizo</th>
                            <th scope="col">Efecto</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Lo usa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fila-encantamiento">
                            <td><strong>Accio</strong></td>
                            <td>Atrae un objeto hacia quien lo lanza.</td>
                            <td><span class="chip chip-encantamiento">Encantamiento</span></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr class="fila-defensa">
                            <td><strong>Expelliarmus</strong></td>
                            <td>Desarma al oponente.</td>
                            <td><span class="chip chip-defensa">Defensa</span></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr class="fila-defensa">
                            <td><strong>Protego</strong></td>
                            <td>Crea un escudo que bloquea hechizos.</td>
                            <td><span class="chip chip-defensa">Defensa</span></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr class="fila-defensa">
                            <td><strong>Expecto Patronum</strong></td>
                            <td>Invoca un Patronus que ahuyenta a los dementores.</td>
                            <td><span class="chip chip-defensa">Defensa</span></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr class="fila-encantamiento">
                            <td><strong>Wingardium Leviosa</strong></td>
                            <td>Hace flotar objetos.</td>
                            <td><span class="chip chip-encantamiento">Encantamiento</span></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr class="fila-utilidad">
                            <td><strong>Lumos</strong></td>
                            <td>Enciende una luz en la punta de la varita.</td>
                            <td><span class="chip chip-utilidad">Utilidad</span></td>
                            <td>Harry Potter</td>
                        </tr>
                        <tr class="fila-utilidad">
                            <td><strong>Alohomora</strong></td>
                            <td>Abre cerraduras mágicas o convencionales.</td>
                            <td><span class="chip chip-utilidad">Utilidad</span></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr class="fila-oscuro">
                            <td><strong>Avada Kedavra</strong></td>
                            <td>Provoca la muerte de la víctima.</td>
                            <td><span class="chip chip-oscuro">Maldición imperdonable</span></td>
                            <td>Voldemort</td>
                        </tr>
                        <tr class="fila-oscuro">
                            <td><strong>Crucio</strong></td>
                            <td>Provoca un dolor insoportable.</td>
                            <td><span class="chip chip-oscuro">Maldición imperdonable</span></td>
                            <td>Bellatrix Lestrange</td>
                        </tr>
                        <tr class="fila-oscuro">
                            <td><strong>Imperio</strong></td>
                            <td>Permite controlar la voluntad de la víctima.</td>
                            <td><span class="chip chip-oscuro">Maldición imperdonable</span></td>
                            <td>Voldemort</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ===== DATO CURIOSO ===== -->
            <div class="section dato-magico dato-hechizos">
                <h5>¿Sabías que...?</h5>
                <p>
                    Expelliarmus es uno de los hechizos más característicos de Harry.
                    En lugar de atacar directamente, busca desarmar al adversario.
                </p>
            </div>

        </div>
    </main>

    <?php include_once("INCLUDES/footer.php"); ?>

    <script>
        M.Slider.init(document.querySelectorAll('.magia-slider'), {
            height: 550,
            interval: 5000,
            indicators: true
        });
    </script>
</body>
</html>