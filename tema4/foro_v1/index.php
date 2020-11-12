
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<!DOCTYPE html>
    <html>
        <head>
            <link rel="stylesheet" type="text/css" href="web/default.css">
            <title></title>

        </head>
        <body>


<?php
// PRIMERA APROXIMACIÓN AL MODELO VISTA CONTROLADOR.
// Funciones auxiliars Ej- usuarioOK
include_once 'app/funciones.php';

if ( !isset($_REQUEST['orden']) ){
    include_once 'app/entrada.php';
}
else {
    switch ($_REQUEST['orden']){
        
        case "Entrar":
            // Chequear usuario
            if ( isset($_REQUEST['nombre']) && isset($_REQUEST['contraseña']) &&
                 usuarioOK($_REQUEST['nombre'], $_REQUEST['contraseña'] )) {
               echo " Bienvenido <b>".$_REQUEST['nombre']."</b><br>";
               include_once  'app/comentario.html';
            }
            else {
                include_once 'app/entrada.php';
                echo " <br> Usuario no válido </br>";
            }
            break;
            
        case "Nueva opinión":
            echo " Nueva opinión <br>";
            include_once  'app/comentario.html';
            break;
        case "Detalles": // Mensaje y detalles
            echo "Detalles de su opinión";
            echo "<div class='login-form'>";
            include_once 'app/comentariorelleno.php';
            include_once 'app/detalles.php';
            echo "</div>";
            break;
        case "Terminar": // Formulario inicial
            include_once 'app/entrada.php';
    }
    
}
?>
<div class="underlay-photo"></div>
            <div class="underlay-black"></div> 
</body>
</html>