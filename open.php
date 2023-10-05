<?php
/* Invertir Nombres de Publicaciones e Historietas, mientras esta nota verde siga aquí es que se tiene que hacer el cambio */
$conexion = new mysqli("localhost", "root", "", "personas");
if ($conexion) {
    echo "Conexión Exitosa";
} else {
    echo "Fallo en la conexión";
}
?>
