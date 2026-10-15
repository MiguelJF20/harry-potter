<?php $titulo = "Pociones - Harry Potter"; ?>
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

            <!-- ===== CHIPS ===== -->
            <div class="section">
                <h4>Tipos de pociones</h4>
                <p>Cada poción tiene un propósito distinto. Estas son las categorías de la tabla:</p>

                <div class="chip chip-transformacion">Transformación</div>
                <div class="chip chip-curacion">Curación</div>
                <div class="chip chip-suerte">Suerte</div>
                <div class="chip chip-mente">Mente y emociones</div>
            </div>

            <!-- ===== TARJETAS DESTACADAS ===== -->
            <div class="section">
                <h4>Elixires extraordinarios</h4>
                <p>Algunas pociones pueden transformar la apariencia, influir en las emociones o alterar la suerte.</p>

                <div class="row tarjetas-magicas">

                    <div class="col s4">
                        <div class="card tarjeta-pocion tarjeta-transformacion">
                            <div class="card-content">
                                <span class="card-title">Poción Multijugos</span>
                                <p class="etiqueta-tarjeta">TRANSFORMACIÓN</p>
                                <p>Permite adoptar la apariencia física de otra persona durante un tiempo limitado.</p>
                                <p class="personaje-tarjeta">Ejemplo: Hermione Granger</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card tarjeta-pocion tarjeta-suerte">
                            <div class="card-content">
                                <span class="card-title">Felix Felicis</span>
                                <p class="etiqueta-tarjeta">SUERTE</p>
                                <p>También conocida como suerte líquida, favorece el éxito de quien la bebe.</p>
                                <p class="personaje-tarjeta">Preparada por: Horace Slughorn</p>
                            </div>
                        </div>
                    </div>

                    <div class="col s4">
                        <div class="card tarjeta-pocion tarjeta-mente">
                            <div class="card-content">
                                <span class="card-title">Amortentia</span>
                                <p class="etiqueta-tarjeta">MENTE Y EMOCIONES</p>
                                <p>Es una poderosa poción de amor que provoca una obsesión intensa, no amor verdadero.</p>
                                <p class="personaje-tarjeta">Presentada por: Horace Slughorn</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- ===== TABLA ===== -->
            <div class="section">
                <h4>Pociones más conocidas</h4>
                <p>Consulta el efecto, la categoría y el personaje relacionado con cada poción.</p>

                <table class="striped responsive-table tabla-magica">
                    <thead>
                        <tr>
                            <th scope="col">Poción</th>
                            <th scope="col">Efecto</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Quién la usa o prepara</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="fila-transformacion">
                            <td><strong>Poción Multijugos</strong></td>
                            <td>Permite adoptar la apariencia de otra persona durante un tiempo limitado.</td>
                            <td><span class="chip chip-transformacion">Transformación</span></td>
                            <td>Hermione Granger</td>
                        </tr>
                        <tr class="fila-suerte">
                            <td><strong>Felix Felicis</strong></td>
                            <td>Favorece la suerte de quien la bebe durante un periodo limitado.</td>
                            <td><span class="chip chip-suerte">Suerte</span></td>
                            <td>Horace Slughorn</td>
                        </tr>
                        <tr class="fila-mente">
                            <td><strong>Veritaserum</strong></td>
                            <td>Hace que quien la toma revele la verdad.</td>
                            <td><span class="chip chip-mente">Emociones</span></td>
                            <td>Severus Snape</td>
                        </tr>
                        <tr class="fila-mente">
                            <td><strong>Amortentia</strong></td>
                            <td>Provoca una intensa obsesión amorosa.</td>
                            <td><span class="chip chip-mente">Emociones</span></td>
                            <td>Horace Slughorn</td>
                        </tr>
                        <tr class="fila-mente">
                            <td><strong>Filtro de los Muertos en Vida</strong></td>
                            <td>Produce un sueño extremadamente profundo.</td>
                            <td><span class="chip chip-mente">Emociones</span></td>
                            <td>Conocido por Horace Slughorn</td>
                        </tr>
                        <tr class="fila-curacion">
                            <td><strong>Crecehuesos</strong></td>
                            <td>Ayuda a regenerar huesos rotos o desaparecidos.</td>
                            <td><span class="chip chip-curacion">Curación</span></td>
                            <td>Madame Pomfrey</td>
                        </tr>
                        <tr class="fila-curacion">
                            <td><strong>Poción de Mandrágora</strong></td>
                            <td>Elaborada con mandrágoras maduras, puede revertir ciertos casos de petrificación.</td>
                            <td><span class="chip chip-curacion">Curación</span></td>
                            <td>Madame Pomfrey y profesores de Hogwarts</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- ===== DATO CURIOSO ===== -->
            <div class="section dato-magico dato-pociones">
                <h5>¿Sabías que...?</h5>
                <p>
                    La Felix Felicis no debe utilizarse de manera excesiva.
                    En la historia, su efecto es temporal y preparar esta poción requiere mucho cuidado.
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