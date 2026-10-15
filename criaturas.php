<?php $titulo = "Criaturas mágicas - Harry Potter"; ?>
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
                        <img src="img/criatura1.jpg" alt="Fénix mágico">
                        <div class="caption left-align">
                            <h3>Criaturas mágicas</h3>
                            <h5>Seres extraordinarios del mundo mágico.</h5>
                        </div>
                    </li>

                    <li>
                        <img src="img/criatura2.jpg" alt="Dragón mágico">
                        <div class="caption left-align">
                            <h3>Dragones</h3>
                            <h5>Criaturas poderosas que exigen precaución.</h5>
                        </div>
                    </li>

                    <li>
                        <img src="img/criatura3.jpg" alt="Basilisco">
                        <div class="caption left-align">
                            <h3>El basilisco</h3>
                            <h5>Una de las criaturas más peligrosas.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">

            <!-- ===== CHIPS ===== -->
            <div class="section">
                <h4>Nivel de peligro</h4>
                <p>Las criaturas de la tabla se clasifican según el riesgo que representan.</p>

                <div class="chip chip-pacifica">Pacífica</div>
                <div class="chip chip-peligrosa">Peligrosa</div>
                <div class="chip chip-mortal">Muy peligrosa</div>
            </div>

            <!-- ===== TARJETAS DESTACADAS ===== -->
            <div class="section">
                <h4>Habitantes extraordinarios del mundo mágico</h4>
                <p>No todas las criaturas mágicas son hostiles; algunas son aliadas de los magos.</p>

                <div class="row tarjetas-magicas">

                    <div class="col s4">
                        <div class="card tarjeta-criatura tarjeta-pacifica">
                            <div class="card-content">
                                <span class="card-title">Fénix</span>
                                <p class="etiqueta-tarjeta">PACÍFICA</p>
                                <p>Ave extraordinaria que renace de sus cenizas y posee lágrimas curativas.</p>
                                <p class="personaje-tarjeta">Ejemplo: Fawkes</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card tarjeta-criatura tarjeta-peligrosa">
                            <div class="card-content">
                                <span class="card-title">Hipogrifo</span>
                                <p class="etiqueta-tarjeta">REQUIERE PRECAUCIÓN</p>
                                <p>Combina características de águila y caballo. Es importante acercarse con respeto.</p>
                                <p class="personaje-tarjeta">Ejemplo: Buckbeak</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card tarjeta-criatura tarjeta-mortal">
                            <div class="card-content">
                                <span class="card-title">Basilisco</span>
                                <p class="etiqueta-tarjeta">MUY PELIGROSA</p>
                                <p>Serpiente gigantesca cuya mirada directa puede resultar mortal.</p>
                                <p class="personaje-tarjeta">Lugar: Cámara Secreta</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===== TABLA ===== -->
            <div class="section">
                <h4>Criaturas más conocidas</h4>
                <p>Los colores indican el nivel de peligro asignado a cada criatura.</p>

                <table class="striped responsive-table tabla-magica">
                    <thead>
                        <tr>
                            <th scope="col">Criatura</th>
                            <th scope="col">Descripción</th>
                            <th scope="col">Peligro</th>
                            <th scope="col">Dónde o con quién aparece</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fila-peligrosa">
                            <td><strong>Hipogrifo</strong></td>
                            <td>Mitad águila y mitad caballo; exige respeto y una reverencia.</td>
                            <td><span class="chip chip-peligrosa">Peligrosa</span></td>
                            <td>Buckbeak, con Hagrid</td>
                        </tr>
                        <tr class="fila-pacifica">
                            <td><strong>Fénix</strong></td>
                            <td>Ave que renace de sus cenizas y cuyas lágrimas tienen propiedades curativas.</td>
                            <td><span class="chip chip-pacifica">Pacífica</span></td>
                            <td>Fawkes, con Dumbledore</td>
                        </tr>
                        <tr class="fila-pacifica">
                            <td><strong>Thestral</strong></td>
                            <td>Caballo alado que pueden ver quienes han comprendido la experiencia de la muerte.</td>
                            <td><span class="chip chip-pacifica">Pacífica</span></td>
                            <td>Hogwarts y el Bosque Prohibido</td>
                        </tr>
                        <tr class="fila-pacifica">
                            <td><strong>Elfo doméstico</strong></td>
                            <td>Ser mágico con habilidades propias, tradicionalmente vinculado al servicio de familias.</td>
                            <td><span class="chip chip-pacifica">Pacífica</span></td>
                            <td>Dobby</td>
                        </tr>
                        <tr class="fila-peligrosa">
                            <td><strong>Escreguto de cola explosiva</strong></td>
                            <td>Criatura híbrida con cola peligrosa que puede producir explosiones.</td>
                            <td><span class="chip chip-peligrosa">Peligrosa</span></td>
                            <td>Clases de Hagrid</td>
                        </tr>
                        <tr class="fila-mortal">
                            <td><strong>Dementor</strong></td>
                            <td>Ser que se alimenta de la felicidad y provoca desesperación.</td>
                            <td><span class="chip chip-mortal">Muy peligrosa</span></td>
                            <td>Azkaban</td>
                        </tr>
                        <tr class="fila-mortal">
                            <td><strong>Basilisco</strong></td>
                            <td>Serpiente gigante cuya mirada directa puede matar.</td>
                            <td><span class="chip chip-mortal">Muy peligrosa</span></td>
                            <td>Cámara Secreta</td>
                        </tr>
                        <tr class="fila-mortal">
                            <td><strong>Dragón</strong></td>
                            <td>Reptil gigante que escupe fuego y puede atacar para defenderse.</td>
                            <td><span class="chip chip-mortal">Muy peligrosa</span></td>
                            <td>Torneo de los Tres Magos</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ===== DATO CURIOSO ===== -->
            <div class="section dato-magico dato-criaturas">
                <h5>¿Sabías que...?</h5>
                <p>
                    El fénix es conocido por su capacidad de renacer de sus cenizas.
                    En la historia, Fawkes también demuestra lealtad y ayuda a Harry en momentos importantes.
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