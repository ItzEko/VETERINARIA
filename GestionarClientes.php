<!DOCTYPE html>
<html lang="en">

<head>
    <?php require_once 'assets/library/librerias.php' ?>
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
            <!-- INPUT DE BUSQUEDA EN TIEMPO REAL -->
            <input type="text" name="nombre" id="buscar" onkeyup="buscarUsuarios()" class="search-input">
        </div>
        <button type="button" class="add-button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Agregar Clientes
        </button>
    </nav>
    <aside class="sidebar">
        <?php require_once './view/sidebar.php' ?>
    </aside>
    <article class="main">
        <div class="container">
            <div id="mitabla"></div>
        </div>
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
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="margen">
                        <h3>Registrar Cliente</h3>
                        <form id="registroClientes"> 
                            <div class="row">
                                <div class="col-6">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre">
                                    <label>Telefono</label>
                                    <input type="number" class="form-control" name="cel" id="cel">
                                    <label>Localidad</label>
                                    <input type="text" class="form-control" name="localidad" id="localidad">
                                    <label>Colonia</label>
                                    <input type="text" class="form-control" name="colonia" id="colonia">
                                </div>
                                <div class="col-6">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos" id="apellidos">
                                    <label>Correo</label>
                                    <input type="email" class="form-control" name="correo" id="correo">
                                    <label>Calle</label>
                                    <input type="text" class="form-control" name="calle" id="calle"> 
                                    <label>CP</label>
                                    <input type="number" class="form-control" name="CP" id="CP">
                                </div>
                            </div>
                            </form>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" id="btnagregar" class="btn btn-success">Agregar</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Modal Editar Clientes-->
    <div class="modal fade" id="editarCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="margen">
                        <h3>Editar Cliente</h3>
                        <form id="#registro_act">
                            <div class="row">
                            <div class="col-6">
                                    <input type="hidden" name="id" id="id">
                                    <label>Nombre</label>
                                    <input type="text" class="form-control" name="nombre1" id="nombre1">
                                    <label>Telefono</label>
                                    <input type="number" class="form-control" name="cel1" id="cel1">
                                    <label>Localidad</label>
                                    <input type="text" class="form-control" name="localidad1" id="localidad1">
                                    <label>Colonia</label>
                                    <input type="text" class="form-control" name="colonia1" id="colonia1">
                                </div>
                                <div class="col-6">
                                    <label>Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos1" id="apellidos1">
                                    <label>Correo</label>
                                    <input type="email" class="form-control" name="correo1" id="correo1">
                                    <label>Calle</label>
                                    <input type="text" class="form-control" name="calle1" id="calle1"> 
                                    <label>CP</label>
                                    <input type="number" class="form-control" name="CP1" id="CP1">
                                </div>
                            </div>
                            </form>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                <button type="button" class="btn btn-success" id="btnaact">Actualizar</button>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>




</html>
<script src="js/funciones.js"></script>
<script src="busqueda_real.js"></script>