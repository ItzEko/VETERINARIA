function enviarLogin() {
    var formData = $("#formulario").serialize();
    $.ajax({
        type: "POST",
        url: "../controller/loginController.php",
        data: formData,
        success: function(response) {
            console.log(response); 
        },
        error: function(error) {
            console.error("Error en la solicitud AJAX:", error);
        }
    });
}
