$(document).ready(function () {

    function consultar_fecha() {
        //Obtiene la Fecha de Hoy
        var hoy = new Date();
        //Obtener Año, Mes, Dia
        var fecha = hoy.getFullYear();
        var mes = ('0' + (hoy.getMonth() + 1)).slice(-2);
        var dia = ('0' + (hoy.getDate())).slice(-2);
        return [fecha,mes,dia];
    }
    var valores = consultar_fecha();
    
    //Agregar fecha al iniciar el codigo
    $(".AAAA").html(valores[0]);
    $(".MM").html(valores[1]);
    $(".DD").html(valores[2]);


    $(".fecha").click(function(){
        $(".AAAA").html(valores[0]);
        $(".MM").html(valores[1]);
        $(".DD").html(valores[2]);
    })



});