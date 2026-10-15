<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Héroes</title>
    <link rel="stylesheet" href="style.css">
    <?php include_once("INCLUDES/head.php"); ?>
</head>

<body>
    <?php include_once("INCLUDES/header.php"); ?>
    <main>
        <div class="section hp-purple white-text" style="background-color:#2a1140;">
            <div class="container">
                <h2 class="hp-title white-text" style="margin-bottom: 10px;">Los Héroes</h2>
            </div>
        </div>
        <br>
        <br>
        <div class="row heroes-row">
            <div class="col s4">
                <div class="heroes-container">
                    <div class="card">
                        <div class="card-image waves-effect waves-block waves-light">
                            <img class="activator" src="img/harry-potter.jpg" alt="Harry Potter">
                        </div>
                        <div class="card-content">
                            <span class="card-title activator grey-text text-darken-4">Harry Potter</span>
                        </div>
                        <div class="card-reveal">
                            <span class="card-title grey-text text-darken-4">Harry Potter<i
                                    class="material-icons right">close</i></span>
                            <p>Es el protagonista de la historia, conocido como "El niño que sobrevivió" tras derrotar a
                                Lord
                                Voldemort cuando era un bebé. Es un joven valiente, leal y decidido, que asume el pesado
                                destino
                                de enfrentar al Señor Oscuro para proteger al mundo mágico y no mágico.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col s4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/Hermione Granger.jpg" alt="Hermione Granger">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Hermione Granger</span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Hermione Granger<i
                                class="material-icons right">close</i></span>
                        <p>Es una bruja de sangre mestiza, conocida por su inteligencia, valentía y lealtad. Es una
                            de las
                            mejores amigas de Harry Potter y Ron Weasley, y desempeña un papel crucial en la
                            historia.</p>
                    </div>
                </div>
            </div>

            <div class="col s4">
                <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                        <img class="activator" src="img/Ron Weasley.jpg" alt="Ron Weasley">
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">Ron Weasley</span>
                    </div>
                    <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Ron Weasley<i
                                class="material-icons right">close</i></span>
                        <p>Es un chico leal, valiente y divertido, que es amigo de Harry Potter y Hermione Granger.
                            Es
                            miembro de la familia Weasley y desempeña un papel importante en la historia.</p>
                    </div>
                </div>
            </div>
        </div>

        <div>
            <ul class="collapsible">
                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">looks_one</i>
                        Harry Potter
                        <span class="badge">Protagonista 1</span>
                    </div>
                    <div class="collapsible-body">

                        <p>Es el protagonista de la historia, conocido como "El niño que sobrevivió" tras derrotar a
                            Lord Voldemort cuando era un bebé. Es un joven valiente, leal y decidido, que asume el
                            pesado destino de enfrentar al Señor Oscuro para proteger al mundo mágico y no mágico.</p>

                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Saber más</a>

                        <!-- Modal Structure -->
                        <div id="modal1" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Daniel Radcliffe (Harry Potter)</h4>
                                <p>• Carrera: Tras interpretar al mago, se alejó de los grandes blockbusters de
                                    Hollywood para enfocarse en el teatro (obras en Broadway y el West End como Equus y
                                    Merrily We Roll Along, por la que ganó un premio Tony) y en películas independientes
                                    y excéntricas como Guns Akimbo y la serie Miracle Workers.
                                    <br>
                                    <br>
                                    • Vida personal: Ha mantenido una relación estable con la actriz Erin Darke durante
                                    años y se convirtió en padre. También apoya activamente causas benéficas como The
                                    Trevor Project.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                            </div>
                        </div>

                    </div>
                </li>

                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">looks_two</i>
                        Hermione Granger
                        <span class="badge">Protagonista 2</span>
                    </div>
                    <div class="collapsible-body">
                        <p>Es una bruja de sangre mestiza, conocida por su inteligencia, valentía y lealtad. Es una de
                            las mejores amigas de Harry Potter y Ron Weasley, y desempeña un papel crucial en la
                            historia.</p>

                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal2">Saber más</a>

                        <!-- Modal Structure -->
                        <div id="modal2" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Emma Watson (Hermione Granger)</h4>
                                <p>• Carrera: Continuó su carrera en el cine con papeles destacados en producciones como
                                    Las mujercitas, La bella y la bestia y Noé. Se graduó en literatura inglesa en la
                                    Universidad de Brown en 2014.
                                    <br>
                                    <br>
                                    • Vida personal y activismo: Se convirtió en Embajadora de Buena Voluntad de la ONU
                                    (impulsando la campaña HeForShe) y es una figura muy vocal en la defensa de los
                                    derechos de las mujeres y la moda sostenible.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                            </div>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="collapsible-header">
                        <i class="material-icons">looks_3</i>
                        Ron Weasley
                        <span class="badge">Protagonista 3</span>
                    </div>
                    <div class="collapsible-body">
                        <p>Es un chico leal, valiente y divertido, que es amigo de Harry Potter y Hermione Granger. Es
                            miembro de la familia Weasley y desempeña un papel importante en la historia.</p>

                        <!-- Modal Trigger -->
                        <a class="waves-effect waves-light btn modal-trigger" href="#modal3">Saber más</a>

                        <!-- Modal Structure -->
                        <div id="modal3" class="modal modal-fixed-footer">
                            <div class="modal-content">
                                <h4>Rupert Grint (Ron Weasley)</h4>
                                <p>• Carrera: Ha trabajado en diversos proyectos de televisión y cine, destacando en
                                    series como Snatch y el thriller psicológico Servant (dirigido por M. Night
                                    Shyamalan), además de la película Knock at the Cabin. Ha administrado con éxito una
                                    amplia cartera de bienes raíces.
                                    <br>
                                    <br>
                                    • Vida personal: Tuvo a su hija Wednesday en mayo de 2020 junto a su pareja Georgia
                                    Groome, y ha mencionado en varias ocasiones que guarda un gran afecto por su etapa
                                    como Ron Weasley.
                                </p>
                            </div>
                            <div class="modal-footer">
                                <a href="#!" class="modal-close waves-effect waves-green btn-flat">Cerrar</a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

    </main>
    <?php include_once("INCLUDES/footer.php"); ?>
</body>
</html>