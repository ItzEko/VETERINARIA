$(document).ready(function () {
  $("#mitabla").load("view/tablaClientes.php");
  $("#btnagregar").click(function () {
    datos = $("#registroClientes").serialize();

    $.ajax({
      type: "POST",
      data: datos,
      url: "controller/clientesController.php",
      success: function (r) {
        if (r == 1) {
          $("#registroClientes")[0].reset();
          $("#mitabla").load("view/tablaClientes.php");

          alertify.success("Agregado con exito");
        } else {
          echo("EL REGISTRO NO SE PUDO COMPLETAR");
        }
      },
    });
  });
});


  //eliminar
  function eliminar(id) {
    alertify.confirm(
      "¿Está seguro de que desea eliminar el registro?",
      function () {
        $.ajax({
          type: "POST",
          data: "id=" + id,
          url: "model/eliminarClienteModel.php",
          success: function (r) {
            if (r == 1) {
              //Linea para "refrescar" y actualizar la tabla cuando se eliminan datos nuevos
              $("#mitabla").load("view/tablaClientes.php");
              alertify.success("Eliminado con exito");
            } else {
              alertify.error("No se pudo eliminar el registro");
            }
          },
        });
      },
      function () {
        alertify.error("Se cancelo");
      }
    );
  }

  function obtenerDatos(id) {
    $.ajax({
      type: "POST",
      data: "id=" + id,
      url: "model/optenerCliente.php",
      success: function (r) {
        datos = jQuery.parseJSON(r);
        $("#id").val(datos["id_usuario"]);
        $("#nombre1").val(datos["Nombre"]);
        $("#cel1").val(datos["Telefono"]);
        $("#localidad1").val(datos["Localidad"]);
        $("#colonia1").val(datos["Colonia"]);
        $("#apellidos1").val(datos["Apellido"]);
        $("#correo1").val(datos["Correo"]);
        $("#CP1").val(datos["Cp"]);
      },
    });
  }

  $(document).ready(function () {
    $("#btnaact").click(function () {
      datos = $("#registro_act").serialize();
      $.ajax({
        type: "POST",
        data: datos,
        url: "controller/actualizarClienteController.php",
        success: function (r) {
          if (r == 1) {
            //Linea para "refrescar" y actualizar la tabla cuando se eliminan datos nuevos
            $("#mitabla").load("view/tablaClientes.php");
            alertify.success("Se actualizo");
          } else {
            alertify.error("No se pudo actualizar el registro");
          }
        },
      });
    });
  });