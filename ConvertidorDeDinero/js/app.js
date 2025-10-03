$(function() {
    // Aquí el código funcional, como los eventos de click
    cargarEventos();
    
});
function cargarEventos() {
    $("#boton-calcular").off("click").on("click",
        function() {
            $.post(
                "calcular.php",
                {
                    "monto": parseFloat($("#monto").val()),
                    "moneda-origen": $("#moneda-origen").val(),
                    "moneda-destino": $("#moneda-destino").val()
                },
                function(response) {
                    $("#resultado").text(response);
                }
            )
        }
    );
}