$(function () {
  cargarEventos();
});
function cargarEventos() {
  $("#boton-generar")
    .off("click")
    .on("click", function () {
      $.post(
        "generar.php",
        {
          longitud: $("#longitud").val(),
          mayusculas: $("#mayusculas").is(":checked"),
          minusculas: $("#minusculas").is(":checked"),
          numeros: $("#numeros").is(":checked"),
          especiales: $("#especiales").is(":checked"),
        },
        function (response) {
          $("#resultado").text(response);
        }
      );
    });
}
