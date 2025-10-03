$(function() {
    // Aquí el código funcional, como los eventos de click
    cargarEventos();
    
});
function cargarEventos() {
    $("#boton-calcular").off("click").on("click",
        function() {
            //TOMA LOS VALORES DE LOS INPUTS DE index.php
            let cuenta = parseFloat($("#campo-cuenta").val());
            let propina = parseFloat($("#campo-propina").val());

            if (isNaN(cuenta) || isNaN(propina) || cuenta < 0 || propina < 0) {
                alert("Por favor ingrese valores numéricos y mayores a 0 para la cuenta y la propina.");
                return;
            }

            //REALIZA EL CÁLCULO DE LA PROPINA Y EL TOTAL A PAGAR
            let montoPropina = cuenta * (propina / 100);
            let total = cuenta + montoPropina;

            //MUESTRA EL RESULTADO EN EL HTML
            $("#resultado-total").text(total.toFixed(2));
            $("#resultado-propina").text( montoPropina.toFixed(2));
        }
    );
}