<?php
$eleccion = $_POST['tipoFormulario'];
$enviado = $_POST['enviar'];
$registro = $_POST['registro'];

function repintadoEMT()
{
    $matricula = $_POST['matricula'];
    $ubicacion = $_POST['ubicacion'];
    $esMatricula = true;
    $esUbicacion = true;
    $fichero = fopen("vehiculosEMT.txt", "r");

    if (empty($matricula) or $matricula == "ej: (1111-ABC)") {
        $esMatricula = false;
    }
    if (empty($ubicacion) or $ubicacion == "ej: (18PlazaMayor_Villaverde)") {
        $esUbicacion = false;
    }

    if ($fichero) {
        $repintado = '<!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Formulario Vehiculos EMT</title>
                                <link rel="stylesheet" href="estilo.css">
                            </head>
                            <body>
                                <h1>Formulario Vehiculos EMT</h1>';

        if ($esMatricula and $esUbicacion) {
            $escribir = fopen("vehiculosEMT.txt", "a");
            fwrite($escribir, "$matricula $ubicacion\n");
            fclose($escribir);
            $repintado .= '<div>
                                Matricula registrada: ' . $matricula .
                '<br><br>
                                Ubicacion registrada: ' . $ubicacion .
                '<br><br>
                                <button class="elBoton"><a href="index.html">Volver al menu</a></button>
                            </div>';
        } else {
            $repintado .= '<form action="validarFormulario.php" method="post" ENCTYPE="multipart/form-data">
                                Matricula: <input type="text" name="matricula" value="ej: (1111-ABC)">
                                <br><br>
                                Ubicacion: <input type="text" name="ubicacion" value="ej: (18PlazaMayor_Villaverde)">
                                <br><br>
                                <input type="submit" name="registro" value="Registrar VehiculosEMT">
                            </form>';
        }
        $repintado .= '</body>
                        </html>';
        echo $repintado;
    } else {
        echo 'Archivo no encontrado';
    }
}

function repintadoTaxis()
{
    $matricula = $_POST['matricula'];
    $nombre = $_POST['nombre'];
    $esMatricula = true;
    $esNombre = true;
    $fichero = fopen("taxis.txt", "r");

    if (empty($matricula) or $matricula == "ej: (1111-ABC)") {
        $esMatricula = false;
    }
    if (empty($nombre) or $nombre == "ej: (Juan_Alvarez)") {
        $esNombre = false;
    }

    if ($fichero) {
        $repintado = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Formulario Taxis</title>
                            <link rel="stylesheet" href="estilo.css">
                        </head>
                        <body>
                            <h1>Formulario Taxis</h1>';

        if ($esMatricula and $esNombre) {
            $escribir = fopen("taxis.txt", "a");
            fwrite($escribir, "$matricula $nombre\n");
            fclose($escribir);
            $repintado .= '<div>
                                Matricula registrada: ' . $matricula .
                '<br><br>
                                Nombre registrado: ' . $nombre .
                '<br><br>
                                <button class="elBoton"><a href="index.html">Volver al menu</a></button>
                            </div>';
        } else {
            $repintado .= '<form action="validarFormulario.php" method="post" ENCTYPE="multipart/form-data">
                                Matricula: <input type="text" name="matricula" value="ej: (1111-ABC)">
                                <br><br>
                                Nombre: <input type="text" name="nombre" value="ej: (Juan_Alvarez)">
                                <br><br>
                                <input type="submit" name="registro" value="Registrar Taxis">
                            </form>';
        }
        $repintado .= '</body>
                        </html>';
        echo $repintado;
    } else {
        echo 'Archivo no encontrado';
    }
}

function repintadoServicios()
{
    $matricula = $_POST['matricula'];
    $servicios = $_POST['servicios'];
    $esMatricula = true;
    $esServicio = true;
    $fichero = fopen("servicios.txt", "r");

    if (empty($matricula) or $matricula == "ej: (1111-ABC)") {
        $esMatricula = false;
    }
    if (empty($servicios) or $servicios == "ej: (Ambulancia)") {
        $esServicio = false;
    }

    if ($fichero) {
        $repintado = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Formulario Servicios</title>
                            <link rel="stylesheet" href="estilo.css">
                        </head>
                        <body>
                            <h1>Formulario Servicios</h1>';

        if ($esMatricula and $esServicio) {
            $escribir = fopen("servicios.txt", "a");
            fwrite($escribir, "$matricula $servicios\n");
            fclose($escribir);
            $repintado .= '<div>
                                Matricula registrada: ' . $matricula .
                '<br><br>
                                Servicios registrada: ' . $servicios .
                '<br><br>
                                <button class="elBoton"><a href="index.html">Volver al menu</a></button>
                            </div>';
        } else {
            $repintado .= '<form action="validarFormulario.php" method="post" ENCTYPE="multipart/form-data">
                                Matricula: <input type="text" name="matricula" value="ej: (1111-ABC)">
                                <br><br>
                                Tipo de Servicio: <input type="text" name="servicios" value="ej: (Ambulancia)">
                                <br><br>
                                <input type="submit" name="registro" value="Registrar Servicios">
                            </form>';
        }
        $repintado .= '</body>
                        </html>';
        echo $repintado;
    } else {
        echo 'Archivo no encontrado';
    }
}

function repintadoLogistica()
{
    $matricula = $_POST['matricula'];
    $empresa = $_POST['empresa'];
    $esMatricula = true;
    $esEmpresa = true;
    $fichero = fopen("logistica.txt", "r");

    if (empty($matricula) or $matricula == "ej: (1111-ABC)") {
        $esMatricula = false;
    }
    if (empty($empresa) or $empresa == "ej: (SEUR)") {
        $esEmpresa = false;
    }

    if ($fichero) {
        $repintado = '<!DOCTYPE html>
                        <html lang="en">
                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <title>Formulario Logistica</title>
                            <link rel="stylesheet" href="estilo.css">
                        </head>
                        <body>
                            <h1>Formulario Logistica</h1>';

        if ($esMatricula and $esEmpresa) {
            $escribir = fopen("logistica.txt", "a");
            fwrite($escribir, "$matricula $empresa\n");
            fclose($escribir);
            $repintado .= '<div>
                            Matricula registrada: ' . $matricula .
                '<br><br>
                            Empresa registrada: ' . $empresa .
                '<br><br>
                            <button class="elBoton"><a href="index.html">Volver al menu</a></button>
                        </div>';
        } else {
            $repintado .= '<form action="validarFormulario.php" method="post" ENCTYPE="multipart/form-data">
                            Matricula: <input type="text" name="matricula" value="ej: (1111-ABC)">
                            <br><br>
                            Nombre Empresa: <input type="text" name="empresa" value="ej: (SEUR)">
                            <br><br>
                            <input type="submit" name="registro" value="Registrar Logistica">
                        </form>';
        }
        $repintado .= '</body>
                    </html>';
        echo $repintado;
    } else {
        echo 'Archivo no encontrado';
    }
}

function repintadoResidentes()
{
    $matricula = $_POST['matricula'];
    $direccion = $_POST['direccion'];
    $fechaInicio = $_POST['fechaInicio'];
    $fechaFin = $_POST['fechaFin'];
    $inicio = new DateTime($fechaInicio);
    $fin = new DateTime($fechaFin);
    $esMatricula = true;
    $esDireccionn = true;
    $esFecha = true;
    $fichero = fopen("residentesYHoteles.txt", "r");

    if (empty($matricula) or $matricula == "ej: (1111-ABC)") {
        $esMatricula = false;
    }
    if (empty($direccion) or $direccion == "ej: (C/ Alonso, 11)") {
        $esDireccionn = false;
    }
    $intervalo = $inicio->diff($fin);
    if ($intervalo->format('%R%') == "-" or $inicio->format('Y/m/d') == $fin->format('Y/m/d')) {
        $esFecha  = false;
    }

    if ($fichero) {
        $repintado = '<!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Formulario Residentes y Hoteles</title>
                    <link rel="stylesheet" href="estilo.css">
                </head>
                <body>
                    <h1>Formulario Residentes y Hoteles</h1>';

        if ($esMatricula and $esDireccionn and $esFecha) {
            $escribir = fopen("residentesYHoteles.txt", "a");
            fwrite($escribir, "$matricula $direccion " . $inicio->format('Y/m/d') . " " . $fin->format('Y/m/d') . "\n");
            fclose($escribir);
            $repintado .= '<div>
                                Matricula registrada: ' . $matricula .
                '<br><br>
                                    Direccion registrada: ' . $direccion .
                '<br><br>
                                    La fecha de inicio registrada: ' . $inicio->format('Y/m/d') .
                '<br><br>
                                    La fecha de fin registrada: ' . $fin->format('Y/m/d') .
                '<br><br>
                                    <button class="elBoton"><a href="index.html">Volver al menu</a></button>
                            </div>';
        } else {
            $repintado .= '<form action="validarFormulario.php" method="post" ENCTYPE="multipart/form-data">
                                Matricula: <input type="text" name="matricula" value="ej: (1111-ABC)">
                                <br><br>
                                Direccion: <input type="text" name="direccion" value="ej: (C/ Alonso, 11)">
                                <br><br>
                                Fecha Incio: <input type="date" name="fechaInicio">
                                <br><br>
                                Fecha Fin: <input type="date" name="fechaFin">
                                <br><br>
                                <input type="submit" name="registro" value="Registrar Residentes">
                            </form>';
        }
        $repintado .= '</body>
                    </html>';
        echo $repintado;
    } else {
        echo 'Archivo no encontrado';
    }
}

function vehiculosInfractores()
{
    $repintado = '<!DOCTYPE html>
                    <html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <meta name="viewport" content="width=device-width, initial-scale=1.0">
                        <title>Formulario Residentes y Hoteles</title>
                        <style>
                            body {
                                padding: 10px;
                                text-align: center;
                            }

                            div {
                                width: 350px;
                                margin: 0 auto;
                                border: solid 2px black;
                                padding: 10px;
                            }

                            a {
                                text-decoration: none;
                                color: black;
                            }

                            button {
                                padding: 5px;
                            }
                        </style>
                    </head>

                    <body>
                        <div>
                            <h1>Vehículos Infractores</h1>';

    $ficheroResidentes = fopen("residentesYHoteles.txt", "r");
    $ficheroLogistica = fopen("logistica.txt", "r");
    $ficheroServicios = fopen("servicios.txt", "r");
    $ficheroTaxis = fopen("taxis.txt", "r");
    $ficheroEMT = fopen("vehiculosEMT.txt", "r");
    $ficheroVehiculos = fopen("vehiculos.txt", "r");

    if (!$ficheroResidentes || !$ficheroLogistica || !$ficheroServicios || !$ficheroTaxis || !$ficheroEMT || !$ficheroVehiculos) {
        die('Error al leer los archivos.txt');
    }

    while (($lineaVehiculo = fgets($ficheroVehiculos)) != false) {
        $interruptor = false;

        if (strpos($lineaVehiculo, "electrico") != false) {
            $interruptor = true;
        }

        $lineaVehiculo = substr($lineaVehiculo, 0, 8);

        if (comprobrarInfractores($lineaVehiculo, $ficheroResidentes)) {
            $interruptor = true;
        } else if (comprobrarInfractores($lineaVehiculo, $ficheroLogistica)) {
            $interruptor = true;
        } else if (comprobrarInfractores($lineaVehiculo, $ficheroServicios)) {
            $interruptor = true;
        } else if (comprobrarInfractores($lineaVehiculo, $ficheroTaxis)) {
            $interruptor = true;
        } else if (comprobrarInfractores($lineaVehiculo, $ficheroEMT)) {
            $interruptor = true;
        }

        if (!$interruptor) {
            $repintado .= '<p>Matrícula infractora: ' . $lineaVehiculo . '</p>';
        }
    }

    fclose($ficheroResidentes);
    fclose($ficheroLogistica);
    fclose($ficheroServicios);
    fclose($ficheroTaxis);
    fclose($ficheroEMT);
    fclose($ficheroVehiculos);

    $repintado .= '<button class="elBoton"><a href="index.html">Volver al menu</a></button>
                    </div>
                    </body>
                    </html>';

    echo $repintado;
}

function comprobrarInfractores($matricula, $ruta)
{
    rewind($ruta);
    while (($linea = fgets($ruta)) != false) {
        $linea = substr($linea, 0, 8);
        if ($matricula == $linea) {
            return true;
        }
    }
    return false;
}

if ($enviado == "Enviar") {
    switch ($eleccion) {
        case "residentesHoteles":
            repintadoResidentes();
            break;
        case "vehiculosEMT":
            repintadoEMT();
            break;
        case "taxis":
            repintadoTaxis();
            break;
        case "servicios":
            repintadoServicios();
            break;
        case "logistica":
            repintadoLogistica();
            break;
        case "infractores":
            vehiculosInfractores();
            break;
    }
} else {
    switch ($registro) {
        case "Registrar Residentes":
            repintadoResidentes();
            break;
        case "Registrar VehiculosEMT":
            repintadoEMT();
            break;
        case "Registrar Taxis":
            repintadoTaxis();
            break;
        case "Registrar Servicios":
            repintadoServicios();
            break;
        case "Registrar Logistica":
            repintadoLogistica();
            break;
    }
}
