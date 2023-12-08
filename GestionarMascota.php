<!DOCTYPE html>
<html lang="es">

<head>
<?php require_once'./assets/library/librerias.php'?>
    <link rel="stylesheet" href="./css/styleGestionMascotas.css">
    <title>GESTIONAR MASCOTAS</title>
</head>

<body class="grid-container">
    <!--se agrega como grid container por la clase de maquetado que se esta realizando -->
    <header class="header">
        <?php require_once './view/header.php' ?>    
    </header>
    <nav class="navbar">
        <div class="search-bar">
            <span class="search-icon">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" class="search-input" placeholder="Buscar...">
        </div>
        <button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#Registrar">
            Registrar Mascotas
        </button>
    </nav>
    <aside class="sidebar">
        <?php require_once './view/sidebar.php'?>
    </aside>
    <article class="main">
        <table class="tabla-gestion-mascotas">
            <thead>
                <tr>
                    <th>Num</th>
                    <th>Nombre</th>
                    <th>Edad</th>
                    <th>Tamaño</th>
                    <th>Sexo</th>
                    <th>Raza</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas y celdas -->
                <tr>
                    <td>1</td>
                    <td>Luna</td>
                    <td>3</td>
                    <td>Mediano</td>
                    <td>Hembra</td>
                    <td>Siamesa</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Actualizar">
                        <i class="bi bi-pencil-square"></i>
                    </button></td>
                <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Eliminar">
                        <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Max</td>
                    <td>2</td>
                    <td>Mediana</td>
                    <td>Macho</td>
                    <td>Pastor Aleman</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Actualizar">
                        <i class="bi bi-pencil-square"></i>
                    </button></td>
                <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Eliminar">
                        <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Whiskers</td>
                    <td>5</td>
                    <td>Grande</td>
                    <td>Macho</td>
                    <td>Angora</td>
                   <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Actualizar">
                        <i class="bi bi-pencil-square"></i>
                    </button></td>
                <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Eliminar">
                        <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bella</td>
                    <td>1</td>
                    <td>Pequeña</td>
                    <td>Hembra</td>
                    <td>Labrador</td>
                   <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Actualizar">
                        <i class="bi bi-pencil-square"></i>
                    </button></td>
                <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Eliminar">
                        <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mia</td>
                    <td>2</td>
                    <td>Pequeña</td>
                    <td>Hembra</td>
                    <td>Chihuahua</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Actualizar">
                        <i class="bi bi-pencil-square"></i>
                    </button></td>
                <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Eliminar">
                        <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Simba</td>
                    <td>6</td>
                    <td>Mediano</td>
                    <td>Macho</td>
                    <td>Bengali</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Actualizar">
                        <i class="bi bi-pencil-square"></i>
                    </button></td>
                <td><button class="red" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Eliminar">
                        <i class="bi bi-trash"></i></button> </td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Bombom</td>
                    <td>6</td>
                    <td>Mediano</td>
                    <td>Macho</td>
                    <td>Bengali</td>
                    <td><button class="green" type="button" class="add-button" data-bs-toggle="modal"
                        data-bs-target="#Actualizar">
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

    <!-- Modal -->
    <div class="modal fade" id="Registrar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="margen">
                        <h3>REGISTRO DE MASCOTAS</h3>
                        <form>
                            <div class="row">
                                <div class="col-4">
                                    <label>Nombre Mascota</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Nombre Cliente</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="Date" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Edad</label>
                                    <i class="bi bi-sort-numeric-up-alt"></i><input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Tamaño</label>
                                    <i class="bi bi-rulers"></i><input type="number" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Peso</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Color</label>
                                    <i class="bi bi-palette"></i><input type="email" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Sexo</label>
                                    <i class="bi bi-gender-ambiguous"></i><input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Especie</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Raza</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal Actualizar-->
    <div class="modal fade" id="Actualizar" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="margen">
                        <h3>ACTUALIZAR MASCOTAS</h3>
                        <form>
                            <div class="row">
                                <div class="col-4">
                                    <label>Nombre Mascota</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Nombre Cliente</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Fecha de Nacimiento</label>
                                    <input type="Date" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Edad</label>
                                    <i class="bi bi-sort-numeric-up-alt"></i><input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Tamaño</label>
                                    <i class="bi bi-rulers"></i><input type="number" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Peso</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Color</label>
                                    <i class="bi bi-palette"></i><input type="email" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Sexo</label>
                                    <i class="bi bi-gender-ambiguous"></i><input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Especie</label>
                                    <input type="text" class="form-control">
                                </div>
                                <div class="col-4">
                                    <label>Raza</label>
                                    <input type="text" class="form-control">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success">Registrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>