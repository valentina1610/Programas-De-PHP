$(function () {
  cargarEventos();
});
function cargarEventos() {
  $("#boton-calcular")
    .off("click")
    .on("click", function () {
      $.post(
        "calcular.php",
        {
          peso: parseFloat($("#peso").val()),
          altura: parseFloat($("#altura").val())},
        function (response) {
          $("#resultado").html(response);
        }
      );
    });
}
