<?php
include_once "Connection/connection.php";
$query = $bd->query("select * from titulos");
$book = $query->fetchAll(PDO::FETCH_OBJ);
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

<div>
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titulo</th>
                <th scope="col">Tipo</th>
                <th scope="col">Precio</th>
                <th scope="col">Fecha_pub</th>
            </tr>
        </thead>
        <tbody>

            <?php
            foreach ($book as $data) {
            ?>

            <tr>
                <td scope="row"><?php echo $data->id_titulo; ?></td>
                <td><?php echo $data->titulo; ?></td>
                <td><?php echo $data->tipo; ?></td>
                <td><?php echo $data->precio; ?></td>
                <td><?php echo $data->fecha_pub; ?></td>
            </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>