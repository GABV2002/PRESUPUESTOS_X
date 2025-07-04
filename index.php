    <?php
    require("data_conection.php");
$sql = "SELECT dni_cuit, FROM clientes";
$resultado = $conn->query($sql); // Obtenemos datos
    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./lib/jquery-3.7.1.min.js"></script>
    <link rel="stylesheet" href="./css/normalize.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/print.css">
    <title class="titulo_pagina">PRESUPUESTO X</title>


</head>

<body>
    <script src="./js/script.js"></script>
    <nav>
        <ul class="navegador">
            <li class="navegador_inicio">INICIO</li>
            <li class="navegador_presupuestosx">PRESUPUESTOS X</li>
            <li class="navegador_clientes">CLIENTES</li>
            <li class="navegador_pendientes">PENDIENTES</li>
        </ul>
    </nav>
    <header>
        <div class="titulo_app">
            <p>La Casa del Televisor - PRESUPUESTO X</p>
        </div>

    </header>
    <main class="hoja_a4">
        <section class="presupuesto p_a">
            <div class="presupuesto_encabezado">
                <div class="datos_taller">
                    <h1>LA CASA DEL TELEVISOR</h1>
                    <h2>SERVICIO TECNICO</h2>
                    <h3>Reparacion de Televisores</h3>
                    <p>LEDS - SMART TV</p>
                    <p>DIRECCION: AV. Juan Domingo Peron 143</p>
                    <p>TELEFONO: (351) 626-2583</p>
                </div>

                <div class="fecha_tipo">
                    <div class="datos_legales">
                        <p>N°000000</p>
                        <p>C.U.I.T: 20-30070778-6</p>
                        <p>Ingresos Brutos: 270784933</p>
                        <p>Inicio de Actividades: 01/12/2010</p>
                        <p>DOCUMENTO NO VALIDO<br>COMO FACTURA</p>
                    </div>
                    <div class="datos_presupuesto">
                        <div class="fecha">
                            <p>FECHA:</p>
                            <ul>
                                <li class="AAAA"></li>
                                <li class="MM"></li>
                                <li class="DD"></li>


                            </ul>
                        </div>
                        <ul class="tipo_presupuesto_botones">
                            <li>
                                <label for="tipo_p_reparacion_check">REPARACION </label>
                                <input type="checkbox" name="tipo_p_reparacion1" id="tipo_p_reparacion_check">
                            </li>
                            <li>
                                <label for="tipo_p_presupuesto_check">PRESUPUESTO </label>
                                <input type="checkbox" name="tipo_p_presupuesto" id="tipo_p_presupuesto_check">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="presupuesto_datos_cliente">
                <div class="presupuesto_datos_cliente_detalles">
                    <div class="p_datos_cliente_nombre">
                        <label for="nombre_cliente">Señor/a/es: </label>
                        <input type="text" name="nombre_cliente" id="nombre_cliente">
                    </div>
                    <div class="p_datos_cliente_domicilio">
                        <label for="p_datos_cliente_domicilio_IN">Domicilio: </label>
                        <input type="text" name="p_datos_cliente_domicilio_IN" id="p_datos_cliente_domicilio_IN">
                    </div>
                </div>
                <div class="presupuesto_datos_cliente_detalles">
                    <div class="p_datos_cliente_DNI">
                        <label for="p_datos_cliente_DNI_IN">DNI: </label>
                        <input type="text" name="p_datos_cliente_DNI_IN" id="p_datos_cliente_DNI_IN" maxlength="8">
                    </div>
                    <div class="p_datos_cliente_telefono">
                        <label for="p_datos_cliente_telefono_IN">Telefono: </label>
                        <input type="tel" name="p_datos_cliente_telefono_IN" id="p_datos_cliente_telefono_IN">
                    </div>
                </div>
            </div>
            <div class="presupuesto_datos_aparato">
                <ul>
                    <li>CANTIDAD:</li>
                    <li>MARCA: </li>
                    <li>FALLA: </li>
                </ul>
            </div>
            <div class="presupuesto_legal">
                <p>POSEE 3O DÍAS PARA RETIRAR SU APARATO</p>
                <p>EL ARTICULO PARA SER RETIRADO TIENE QUE PRESENTAR INDEFECTIBLEMENTE <br>ESTE COMPROBANTE DENTRO DE
                    LOS 30 DIAS.</p>
                <p>PASADO DICHO TERMINO SE INCREMENTARAN LOS COSTOS.</p>
                <p>DESPUÉS DE 90 DIAS NO DA LUGAR A NINGÚN TIPO DE RECLAMO</p>
            </div>
            <div class="presupuesto_aclaracion_firma"></div>

        </section>
        <!--<section class="presupuesto p_b"></section>-->
    </main>

</body>

</html>