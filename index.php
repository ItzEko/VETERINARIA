<!DOCTYPE html>
<html lang="en">
<?php require_once 'assets/library/librerias.php' ?>
<body class="grid-container">
    <!--se agrega como grid container por la clase de maquetado que se esta realizando -->
    <header class="header">

        <div class="pages">
            <h3>Páginas/Dashboard</h3>
            <h2>Dashboard</h2>
        </div>
        <div class="icons">
            <i class="bi bi-person"></i>
            <i class="bi bi-gear"></i>
            <i class="bi bi-bell"></i>
        </div>
    </header>
    <nav class="navbar">
            <div class="text">
                <h1>¡Hola de nuevo!</h1>
                <h3>Fulanito</h3>
            </div>
            <div class="users">
                <div class="icon"><i class="bi bi-person"></i></div>
                <div class="cant"><h6>Cantidad usuarios</h6><h3>350</h3></div>
            </div>
            <div class="users">
                <div class="icon"><i class="bi bi-person"></i></div>
                <div class="cant"><h6>Cantidad usuarios</h6><h3>350</h3></div>
            </div>
    </nav>
    <aside class="sidebar">
        <h2>Beraca</h2>
        <div class="userside">
            <div class="cube">
                <i class="bi bi-person"></i>
            </div>
            <a href="./index.html">
                <p>Dashboard</p>
            </a>
        </div>
        <div class="registros">
            <p>---REGISTROS---</p>
            <form>
                <a href="./GestionarClientes.html"> 
                        <i class="bi bi-pencil-square"></i>Gestionar Clientes
                </a>
                <a href="./GestionarMascota.html">
                    <i class=" bi bi-gear"></i>
                    Gestionar Mascotas
                </a>
                <a href="#">
                    <i class="bi bi-calendar2-heart"></i>
                    Gestionar Consultas
                </a>
                <a  href="#">
                    <i class="bi bi-calendar-check"></i>
                    Gestionar Citas
                </a>
                <a type="submit" href="#">
                    <i class="bi bi-journal-bookmark"></i>
                    Gestionar Agenda
                </a>
                <a href="#">
                    <i class="bi bi-chat-heart"></i>
                    Gestionar Mensajes
                </a>
                <p>---BUSQUEDA---</p>
                <a href="#">
                    <i class="bi bi-search-heart"></i>
                    Busqueda Adopción
                </a>
                <p>---OTROS---</p>
                <a  href="#">
                    <i class="bi bi-mortarboard"></i>
                    ¿Sabías Qué?
                </a>
            </form>
        </div>
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