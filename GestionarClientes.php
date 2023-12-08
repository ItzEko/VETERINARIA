<!DOCTYPE html>
<html lang="en">

<head>
<<<<<<< HEAD
    <?php require_once './assets/library/librerias.php'?>
=======
    <?php require_once 'assets/library/librerias.php' ?>
>>>>>>> b0bf14af91bbadc2fde9918f2d7e00750c312a7e
    <link rel="stylesheet" href="./css/clientesStyle.css">
    <title>GESTIONAR CLIENTES</title>
</head>

<body class="grid-container">
    <!--se agrega como grid container por la clase de maquetado que se esta realizando -->
    <header class="header">

        <?php require_once 'view/header.php' ?>
    </header>
    <nav class="navbar">
        <div class="search-bar">
            <span class="search-icon">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="search-input" placeholder="Buscar...">
        </div>
        <button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Agregar Clientes
        </button>
    </nav>
    <aside class="sidebar">
        <h2>Beraca</h2>
        <div class="userside">
            <div class="cube">
                <i class="bi bi-person"></i>
            </div>
            <p>Dashboard</p>
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
                <a href="#">
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
                <a href="#">
                    <i class="bi bi-mortarboard"></i>
                    ¿Sabías Qué?
                </a>
            </form>
        </div>
    </aside>
    <article class="main">
        <table>
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Localidad</th>
                    <th>CP</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas y celdas -->
                <tr>
                    <td>1</td>
                    <td>Moises</td>
                    <td>Rivera Santiago</td>
                    <td>San Diego</td>
                    <td>73049</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#editarCliente">
                            <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#Eliminar">
                            <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Itzel</td>
                    <td>Guzman Tellez</td>
                    <td>Tlapacoyan</td>
                    <td>00000</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#editarCliente">
                            <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#Eliminar">
                            <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Ana</td>
                    <td>Lopez Perez</td>
                    <td>Los naranjos</td>
                    <td>0000</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#editarCliente">
                            <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#Eliminar">
                            <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Moises</td>
                    <td>Rivera Santiago</td>
                    <td>San Diego</td>
                    <td>73049</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#editarCliente">
                            <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#Eliminar">
                            <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Itzel</td>
                    <td>Guzman Tellez</td>
                    <td>Tlapacoyan</td>
                    <td>00000</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#editarCliente">
                        <i class="bi bi-pencil-square"></i>
                    </button></td>
                <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Eliminar">
                        <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Ana</td>
                    <td>Lopez Perez</td>
                    <td>Los naranjos</td>
                    <td>0000</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#editarCliente">
                            <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#Eliminar">
                            <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Ana</td>
                    <td>Lopez Perez</td>
                    <td>Los naranjos</td>
                    <td>0000</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#editarCliente">
                            <i class="bi bi-pencil-square"></i>
                        </button></td>
                    <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                            data-bs-target="#Eliminar">
                            <i class="bi bi-trash"></i></button> </td>
                </tr>
                <!-- Repite las filas según sea necesario -->
            </tbody>
        </table>
    </article>
    <footer class="footer">
        <p>pethealt.org</p>
    </footer>

    <!-- Modal Eliminar Registro -->
    <div class="modal fade" id="Eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="margen01">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Registro</h5>
                        <p>¿Estás seguro de que quieres eliminar este Registro?</p>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success">Eliminar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




    <!-- Modal Registrar Clientes-->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="margen">
                        <h3>Registrar Cliente</h3>
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control">
                                    <label>Telefono</label>
                                    <input type="number" class="form-control">
                                    <label>Localidad</label>
                                    <input type="text" class="form-control">
                                    <label>Colonia</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control">
                                    <label>Correo</label>
                                    <input type="email" class="form-control">
                                    <label>Calle</label>
                                    <input type="text" class="form-control">
                                    <label>CP</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success">Agregar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal Editar Clientes-->
    <div class="modal fade" id="editarCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="margen">
                        <h3>Editar Cliente</h3>
                        <form>
                            <div class="row">
                                <div class="col-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control">
                                    <label>Telefono</label>
                                    <input type="number" class="form-control">
                                    <label>Localidad</label>
                                    <input type="text" class="form-control">
                                    <label>Colonia</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-6">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control">
                                    <label>Correo</label>
                                    <input type="email" class="form-control">
                                    <label>Calle</label>
                                    <input type="text" class="form-control">
                                    <label>CP</label>
                                    <input type="number" class="form-control">
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>




</html>