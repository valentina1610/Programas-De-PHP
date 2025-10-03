<?php 
if (($_REQUEST["moneda-origen"] == "peso-argentino") && ($_REQUEST["moneda-destino"] == "dolar")) {
    print $_REQUEST["monto"] / 1424;
}
elseif (($_REQUEST["moneda-origen"] == "dolar") && ($_REQUEST["moneda-destino"] == "peso-argentino")) {
    print $_REQUEST["monto"] * 1424;
}
elseif (($_REQUEST["moneda-origen"] == "peso-argentino") && ($_REQUEST["moneda-destino"] == "euro")) {
    print $_REQUEST["monto"] / 1672;
}
elseif (($_REQUEST["moneda-origen"] == "euro") && ($_REQUEST["moneda-destino"] == "peso-argentino")) {
    print $_REQUEST["monto"] * 1672;
}
elseif (($_REQUEST["moneda-origen"] == "dolar") && ($_REQUEST["moneda-destino"] == "euro")) {
    print $_REQUEST["monto"] * 0.85; // ejemplo: 1 USD = 0.85 EUR
}
elseif (($_REQUEST["moneda-origen"] == "euro") && ($_REQUEST["moneda-destino"] == "dolar")) {
    print $_REQUEST["monto"] * 1.17; // ejemplo: 1 EUR = 1.17 USD
}
elseif ($_REQUEST["moneda-origen"] == $_REQUEST["moneda-destino"]) {
    print "ERROR, no se puede convertir la misma moneda";
}
else {
    print "ERROR";
}
?>