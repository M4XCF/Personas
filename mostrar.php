<?php
    session_start();
    session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilo.css">
    <title>Info</title>
</head>

<body>
    <center>
        <h1>Informacion</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Apellido</th>
                    <th>Nombre</th>
                    <th>Anio</th>
                    <th>Numero</th>
                </tr>
            </thead>
<!--- Títulos --->
            <tbody>
                <?php
                    include("open.php");
                    $consulta = "SELECT * FROM info";
                    $resultado = $conexion->query($consulta);
                    while($row = $resultado->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id_per']; ?></td>
                            <td><?php echo $row['ape_per']; ?></td>
                            <td><?php echo $row['nom_per']; ?></td>
                            <td><?php echo $row['nac_per']; ?></td>
                            <td><?php echo $row['num_per']; ?></td>
                            <td><img height="50px" src="data:image/jpg;base64, <?php echo base64_encode($row['Imagen']); ?>"></td>
                        </tr>
                    <?php
                    }
                    ?>
            </tbody>
        </table>
    </center>
</body>
</html>