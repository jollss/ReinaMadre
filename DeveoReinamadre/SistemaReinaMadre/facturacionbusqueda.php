<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<center>busqueda
<form accept-charset="utf-8" method="POST">
Nombre<input type="text" name="busqueda" id="busqueda" value="" placeholder="Ejemplo:JOE45" maxlength="30" autocomplete="off" onKeyUp="buscar();" />
RFC<input type="text" name="busqueda1" id="busqueda1" value="" placeholder="Ejemplo:1821" maxlength="30" autocomplete="off" onKeyUp="buscar();" />
</form>
<div id="resultadoBusqueda"></div></center>

<script>
$(document).ready(function() {
    $("#resultadoBusqueda").html('<p>Agrega Tu rfc,Numero de tiket</p>');
});

function buscar() {
    var textoBusqueda = $("input#busqueda").val();
var textoBusqueda1 = $("input#busqueda1").val();

     if (textoBusqueda != "") {
        $.post("buscar.php", {valorBusqueda: textoBusqueda,valorBusqueda1:textoBusqueda1}, function(mensaje) {
            $("#resultadoBusqueda").html(mensaje);
         });
     } else {
        $("#resultadoBusqueda").html('<p>JQUERY VACIO</p>');
        };
};
</script>
