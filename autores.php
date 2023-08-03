<?php
include_once "Connection/connection.php";
$query = $bd->query("select * from autores");
$autor = $query->fetchAll(PDO::FETCH_OBJ);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Telefono</th>
                <th scope="col">Direccion</th>
                <th scope="col">Ciudad/Estado</th>
                <th scope="col">Pais</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($autor as $data) {
            ?>

            <tr>
                <td scope="row"><?php echo $data->id_autor ; ?></td>
                <td><?php echo $data->nombre; ?></td>
                <td><?php echo $data->apellido; ?></td>
                <td><?php echo $data->telefono; ?></td>
                <td><?php echo $data->direccion; ?></td>
                <td><?php echo $data->ciudad . "/" . $data->estado ?></td>
                <td><?php echo $data->pais; ?></td>
            </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>