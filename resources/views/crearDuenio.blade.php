<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Crear duenio</title>
</head>
<body>
    <br>
    <h1 class="text-center">Nuevo Duenio</h1>
    <div>
    </div>
    <div class="row justify-content-center">
        <div  class="col-md-6">
            <div>
                <form action="{{route('duenio.guardar')}}" method="POST">
                    @csrf
                    <fieldset>
                        <legend>
                            Datos Personales
                        </legend>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input class="form-control"  type="text" name="nombre" id="nombre" placeholder="Nombre">
                        </div>
                        <div class="form-group">
                            <label for="apellido">Apellido:</label>
                            <input class="form-control" type="text" name="apellido" id="apellido" placeholder="apellido">
                        </div>
                        <div class="form-group">
                            <label for="">Correo:</label>
                            <input class="form-control" type="email" name="correo" id="correo" placeholder="Correo">
                        </div>
                        <div>
                            <br>
                            <input class="btn btn-success" type="submit" value="Guardar" >
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>