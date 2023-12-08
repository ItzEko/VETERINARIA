<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mogra&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styleGestionAdopcion.css">
    <title>GESTIONAR MASCOTAS</title>
</head>

<body class="grid-container">
    <!--se agrega como grid container por la clase de maquetado que se esta realizando -->
    <header class="header">

        <div class="pages">
            <h3>Páginas/Gestionar Mascotas</h3>
            <h2>Gestionar Mascotas</h2>
        </div>
        <div class="icons">
            <i class="bi bi-person"></i>
            <i class="bi bi-gear"></i>
            <i class="bi bi-bell"></i>
        </div>
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
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Max</td>
                    <td>2</td>
                    <td>Mediana</td>
                    <td>Macho</td>
                    <td>Pastor Aleman</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Whiskers</td>
                    <td>5</td>
                    <td>Grande</td>
                    <td>Macho</td>
                    <td>Angora</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Bella</td>
                    <td>1</td>
                    <td>Pequeña</td>
                    <td>Hembra</td>
                    <td>Labrador</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Mia</td>
                    <td>2</td>
                    <td>Pequeña</td>
                    <td>Hembra</td>
                    <td>Chihuahua</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Simba</td>
                    <td>6</td>
                    <td>Mediano</td>
                    <td>Macho</td>
                    <td>Bengali</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Bombom</td>
                    <td>6</td>
                    <td>Mediano</td>
                    <td>Macho</td>
                    <td>Bengali</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <!-- Repite las filas según sea necesario -->
            </tbody>
        </table>
    </article>
    <footer class="footer">
        <p>pethealt.org</p>
    </footer>
    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-body text-center">
                <div>
                    <h3>REGISTRO DE MASCOTAS EN ADOPCION</h3>
                </div>
                <form>
                    <div class="row justify-content-center">
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="fechaNacimiento" class="form-label">Nombre Mascota</label>
                                <input type="text" class="form-control" id="nombreMascota">
                            </div>
                            <div class="mb-3">
                                <label for="tamaño" class="form-label">Tamaño</label>
                                <input type="number" class="form-control" id="tamañoNascota">
                            </div>
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo</label>
                                <input type="text" class="form-control" id="sexoMascota">
                            </div>
                            <div class="mb-3">
                                <label for="energia" class="form-label">Energia</label>
                                <input type="text" class="form-control" id="energiaMascota">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="nombreMascota" class="form-label">Fecha de Nacimiento</label>
                                <input type="Date" class="form-control" id="fechaNacimiento">
                            </div>
                            <div class="mb-3">
                                <label for="edad" class="form-label">peso</label>
                                <input type="number" class="form-control" id="edad">
                            </div>
                            <div class="mb-3">
                                <label for="especie" class="form-label">Especie</label>
                                <input type="text" class="form-control" id="especie">
                            </div>
                            <div class="mb-3">
                                <label for="caracter" class="form-label">Caracter</label>
                                <input type="text" class="form-control" id="caracterMascota">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="mb-3">
                                <label for="edadMascota" class="form-label">edad</label>
                                <input type="number" class="form-control" id="edadMascota">
                            </div>
                            <div class="mb-3">
                                <label for="color" class="form-label">Color</label>
                                <input type="text" class="form-control" id="color">
                            </div>
                            <div class="mb-3">
                                <label for="raza" class="form-label">Raza</label>
                                <input type="text" class="form-control" id="rasaMascota">
                            </div>
                            <div class="mb-3">
                                <label for="sexo" class="form-label">Imagen Mascota</label>
                                <input type="file" class="form-control" id="imagenMascota">
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary">Agregar</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>