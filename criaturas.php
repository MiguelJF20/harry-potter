<?php $titulo = "Criaturas mágicas - Harry Potter"; ?>
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
                        <img src="img/criatura1.jpg" alt="Fénix, acromántula y basilisco">
                        <div class="caption left-align">
                            <h3>Criaturas mágicas</h3>
                            <h5 class="light grey-text text-lighten-3">Del fénix al basilisco: unas son aliadas y otras mortales.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/criatura2.jpg" alt="Fénix">
                        <div class="caption center-align">
                            <h3>Fénix</h3>
                            <h5 class="light grey-text text-lighten-3">Renace de sus cenizas y acompaña a Dumbledore.</h5>
                        </div>
                    </li>
                    <li>
                        <img src="img/criatura3.jpg" alt="Dragón">
                        <div class="caption right-align">
                            <h3>Dragón</h3>
                            <h5 class="light grey-text text-lighten-3">Harry se enfrenta a uno en el Torneo de los Tres Magos.</h5>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <div class="container">

            <!-- ===== CHIPS (componente 2) ===== -->
            <div class="section">
                <h4>Nivel de peligro</h4>
                <p>Las criaturas de la tabla se clasifican según el riesgo que representan:</p>

                <div class="chip chip-pacifica">Pacífica</div>
                <div class="chip chip-peligrosa">Peligrosa</div>
                <div class="chip chip-mortal">Muy peligrosa</div>
            </div>

            <!-- ===== TABLE (componente 1) ===== -->
            <div class="section">
                <h4>Criaturas más conocidas</h4>

                <table class="striped responsive-table">
                    <thead>
                        <tr>
                            <th>Criatura</th>
                            <th>Descripción</th>
                            <th>Peligro</th>
                            <th>Dónde o con quién aparece</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Hipogrifo</td>
                            <td>Mitad águila y mitad caballo; exige respeto y que se le haga una reverencia</td>
                            <td><div class="chip chip-peligrosa">Peligrosa</div></td>
                            <td>Buckbeak, con Hagrid</td>
                        </tr>
                        <tr>
                            <td>Fénix</td>
                            <td>Ave que renace de sus cenizas y cuyas lágrimas curan</td>
                            <td><div class="chip chip-pacifica">Pacífica</div></td>
                            <td>Fawkes, con Dumbledore</td>
                        </tr>
                        <tr>
                            <td>Thestral</td>
                            <td>Caballo alado que solo ven quienes han presenciado una muerte</td>
                            <td><div class="chip chip-pacifica">Pacífica</div></td>
                            <td>Bosque Prohibido</td>
                        </tr>
                        <tr>
                            <td>Elfo doméstico</td>
                            <td>Ser que sirve a una familia de magos y tiene una magia distinta</td>
                            <td><div class="chip chip-pacifica">Pacífica</div></td>
                            <td>Dobby</td>
                        </tr>
                        <tr>
                            <td>Escreguto de cola explosiva</td>
                            <td>Criatura híbrida con aguijón y cola que lanza chispas</td>
                            <td><div class="chip chip-peligrosa">Peligrosa</div></td>
                            <td>Clases de Hagrid</td>
                        </tr>
                        <tr>
                            <td>Dementor</td>
                            <td>Se alimenta de la felicidad de las personas y causa desesperanza</td>
                            <td><div class="chip chip-mortal">Muy peligrosa</div></td>
                            <td>Azkaban</td>
                        </tr>
                        <tr>
                            <td>Basilisco</td>
                            <td>Serpiente gigante cuya mirada puede matar</td>
                            <td><div class="chip chip-mortal">Muy peligrosa</div></td>
                            <td>Cámara Secreta</td>
                        </tr>
                        <tr>
                            <td>Dragón</td>
                            <td>Reptil gigante que escupe fuego y protege sus huevos</td>
                            <td><div class="chip chip-mortal">Muy peligrosa</div></td>
                            <td>Torneo de los Tres Magos</td>
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