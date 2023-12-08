<!DOCTYPE html>
<html lang="en">

<head>
<?php require_once'./assets/library/librerias.php'?>
    <link rel="stylesheet" href="./css/gestioncitas.css">
    <title>GESTION DE CITAS</title>
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
        <button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Registrar Cita
        </button>
        <div class="peticiones"><i class="bi bi-calendar2-heart"></i></div>
    </nav>
    <aside class="sidebar">
        <?php require_once './view/sidebar.php' ?>
    </aside>
    <article class="main">
        <table>
            <thead>
                <tr>
                    <th>Num. Cita</th>
                    <th>Nombre Cliente</th>
                    <th>Nombre Mascota</th>
                    <th>Fecha Consulta</th>
                    <th>Hora</th>
                    <th colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <!-- Filas y celdas -->
                <tr>
                    <td>1</td>
                    <td>Maria Perez</td>
                    <td>Luna</td>
                    <td>2023/12/01</td>
                    <td>1:00pm</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Guztavo Rodriguez</td>
                    <td>Max</td>
                    <td>2023/12/01</td>
                    <td>1:00pm</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Pedro Santiago</td>
                    <td>Whiskers</td>
                    <td>2023/12/01</td>
                    <td>1:00pm</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Eduardo Zapata</td>
                    <td>Bella</td>
                    <td>2023/12/01</td>
                    <td>1:00pm</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>Sara Cuevas</td>
                    <td>Mia</td>
                    <td>2023/12/01</td>
                    <td>1:00pm</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>Maria Perez</td>
                    <td>Simba</td>
                    <td>2023/12/01</td>
                    <td>1:00pm</td>
                    <td class="green"><i class="bi bi-pencil-square"></i></td>
                    <td class="red"><i class="bi bi-trash"></i></td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>Ana Lopez Perez</td>
                    <td>Keiko</td>
                    <td>2023/12/01</td>
                    <td>1:00pm</td>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="">
                        <h3>Registrar Consulta</h3>
                    </div>

                    <form>
                        <div class="row">
                            <div class="col-6">
                                <label>Nombre de Cliente</label>
                                <input type="text" class="form-control">
                                <label>Fecha de la Cita</label>
                                <input type="date" class="form-control">
                            </div>

                            <div class="col-6">
                                <label>Nombre Mascota</label>
                                <input type="text" class="form-control">
                                <label>Hora de la cita</label>
                                <input type="number" class="form-control">
                            </div>
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
</body>




</html>