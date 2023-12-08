$(document).ready(function () {
  $("#mitabla").load("../view/tablaClientes.php");
  $("#btnagregar").click(function () {
    datos = $("#registroClientes").serialize();

    $.ajax({
      type: "POST",
      data: datos,
      url: "controller/clientesController.php",
      success: function (r) {
        if (r == 1) {
          $("#registroClientes")[0].reset();
          $("#mitabla").load("../view/tabla.php");

          alertify.success("Agregado con exito");
        } else {
          echo("EL REGISTRO NO SE PUDO COMPLETAR");
        }
      },
    });
  });
});
