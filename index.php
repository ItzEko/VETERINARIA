<!DOCTYPE html>
<html lang="en">
<header>
<?php require_once 'assets/library/librerias.php' ?>
</header>

<body class="grid-container">
    <!--se agrega como grid container por la clase de maquetado que se esta realizando -->
    <header class="header">
        <?php require_once 'view/header.php' ?>
        
    </header>
    <nav class="navbar">
            <?php require_once 'view/navbar.php'?>
    </nav>
    <aside class="sidebar">
        <?php require_once 'view/sidebar.php'?>
    </aside>
    <article class="main">
        <div class="perfil">
            <div class="logo">
                <img src="./assets/pethealt.jpeg" alt="Descripción de la imagen">
            </div> 
        </div>
        <div class="perfil">
            <div class="logo">
                <img src="./assets/pethealt.jpeg" alt="Descripción de la imagen">
            </div>
        </div>
    </article>
    <footer class="footer"><p>pethealt.org</p></footer>
</body>

</html>