function buscarUsuarios() {
    var nombre = document.getElementById('buscar').value;

    $.ajax({
        type: 'GET',
        url: 'GestionarClientes.php',
        data: {nombre: buscar},
        success: function(response) {
            $('#resultado').html(response);
        }
    });
}