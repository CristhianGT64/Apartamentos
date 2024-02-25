<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Propiedades</title>
</head>
<body>
    <h1>Propiedades</h1>
    <br>
    <br>
    <a href="{{route('propiedad.propiedades')}}" class="btn btn-primary">Propiedades</a>
    <a href="{{route('duenio.duenio')}}" class="btn btn-primary">Duenios</a>
    <div>
        <div>
            <div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>piso</th>
                            <th>area</th>
                            <th>color</th>
                            <th>ID del duenio</th>
                            <th>estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($propiedad as $propiedades)
                        <tr>
                            <td>{{$propiedades->id}}</td>
                            <td>{{$propiedades->piso}}</td>
                            <td>{{$propiedades->area}}</td>
                            <td>{{$propiedades->color}}</td>
                            <td>{{$propiedades->idDuenio}}</td>
                            <td>{{$propiedades->estado}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
</html>