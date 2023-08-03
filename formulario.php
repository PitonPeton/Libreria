<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script>

    </script>
    <title>Document</title>
</head>

<body>
    <form>
        
        <div class="form-group">
            <label for="txtnombre">Nombre</label>
            <input type="text" class="form-control" id="txtnombre" name="nombre">
        </div>

        <div class="form-group">
            <label for="txtcorreo">Correo</label>
            <input type="email" class="form-control" id="txtcorreo" placeholder="name@example.com" name="correo" >
        </div>

        <div class="form-group">
            <label for="txtasunto">Asunto</label>
            <input type="text" class="form-control" id="txtasunto" name="asunto">
        </div>

        <div class="form-group">
            <label for="txtcomentario">Comentarios</label>
            <textarea class="form-control" id="txtcomentario" rows="3" name="comentario"></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</body>

</html>