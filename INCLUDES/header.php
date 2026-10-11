<!-- Menús desplegables -->
<ul id="menu-personajes" class="dropdown-content">
    <li><a href="heroes.php">Héroes</a></li>
    <li><a href="profesores.php">Profesores</a></li>
    <li><a href="villanos.php">Villanos</a></li>
</ul>

<ul id="menu-hogwarts" class="dropdown-content">
    <li><a href="casas.php">Las 4 casas</a></li>
    <li><a href="materias.php">Materias y clases</a></li>
    <li><a href="lugares.php">Lugares del castillo</a></li>
</ul>

<ul id="menu-magia" class="dropdown-content">
    <li><a href="hechizos.php">Hechizos</a></li>
    <li><a href="pociones.php">Pociones</a></li>
    <li><a href="criaturas.php">Criaturas mágicas</a></li>
</ul>

<!-- Navbar -->
<nav class="hogwarts-nav">
    <div class="nav-wrapper container">
        <a href="index.php" class="brand-logo">Harry Potter</a>

        <!-- Botón hamburguesa para celular -->
        <a href="#" data-target="menu-movil" class="sidenav-trigger">
            <i class="material-icons">menu</i>
        </a>

        <!-- Menú para pantallas grandes -->
        <ul class="right hide-on-med-and-down">
            <li><a href="index.php">Inicio</a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="menu-personajes">Personajes<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="menu-hogwarts">Hogwarts<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a class="dropdown-trigger" href="#!" data-target="menu-magia">Magia<i class="material-icons right">arrow_drop_down</i></a></li>
            <li><a href="integrantes.php">Integrantes</a></li>
        </ul>
    </div>
</nav>

<!-- Menú lateral para celular -->
<ul class="sidenav" id="menu-movil">
    <li><a href="index.php">Inicio</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Personajes</a></li>
    <li><a href="heroes.php">Héroes</a></li>
    <li><a href="profesores.php">Profesores</a></li>
    <li><a href="villanos.php">Villanos</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Hogwarts</a></li>
    <li><a href="casas.php">Las 4 casas</a></li>
    <li><a href="materias.php">Materias y clases</a></li>
    <li><a href="lugares.php">Lugares del castillo</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Magia</a></li>
    <li><a href="hechizos.php">Hechizos</a></li>
    <li><a href="pociones.php">Pociones</a></li>
    <li><a href="criaturas.php">Criaturas mágicas</a></li>
    <li><div class="divider"></div></li>
    <li><a href="integrantes.php">Integrantes</a></li>
</ul>